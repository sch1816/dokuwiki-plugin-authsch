<?php

use dokuwiki\plugin\oauth\Adapter;
use dokuwiki\plugin\oauthauthsch\DotAccess;
use dokuwiki\plugin\oauthauthsch\Generic;

/**
 * Service Implementation for oAuth Doorkeeper authentication
 */
class action_plugin_oauthauthsch extends Adapter
{

    /** @inheritdoc */
    public function registerServiceClass()
    {
        return Generic::class;
    }

    /** * @inheritDoc */
    public function getUser()
    {
        $oauth = $this->getOAuthService();
        $data = array();

        $url = 'https://auth.sch.bme.hu/api/profile/';  //$this->getConf('userurl');
        $raw = $oauth->request($url);

        if (!$raw) throw new OAuthException('Failed to fetch data from userurl');
        $result = json_decode($raw, true);
        if (!$result) throw new OAuthException('Failed to parse data from userurl');

        $user = DotAccess::get($result, $this->getConf('authsch_username'), '');
        $name = DotAccess::get($result, 'displayName', '');
        $mail = DotAccess::get($result, $this->getConf('authsch_mail'), '').($this->getConf('authsch_mail')=='linkedAccounts.schacc'?'@sch.bme.hu':'');
        // $grps = DotAccess::get($result, '', []);
        if($this->getConf('authsch_circles')){
            $circles2groups = json_decode($this->getConf('authsch_circles'), true);
            $roles2groups = json_decode($this->getConf('authsch_roles'), true);

            $grps = array();
            $combine = $this->getConf('authsch_combine_circles_roles');
            foreach($result['eduPersonEntitlement'] as $circle){
                if(isset($circles2groups[$circle['id']])){
                    $circle_groupname = $circles2groups[$circle['id']];
                    if($circle['status']=='körvezető' || $circle['status']=='tag' || $circle['status']=='öregtag'){
                        $grps[]=$circle_groupname;
                        foreach($roles2groups as $rol => $role_groupname){
                            if(in_array($rol,$circle['title'])){
                                $grps[]=$role_groupname;
                                if($combine){
                                    $grps[]=$circle_groupname.'-'.$role_groupname;
                                }
                            }
                        }
                        print($circle['status']);
                        if($circle['status']=='körvezető'){
                            $role_x_groupname=$this->getConf('authsch_korvez_role');
                        }else if($circle['status']=='öregtag'){
                            $role_x_groupname=$this->getConf('authsch_oreg_role');
                        }else{
                            $role_x_groupname=$this->getConf('authsch_tag_role');
                        }
                        if(! in_array($role_x_groupname, $grps)){
                            $grps[]=$role_x_groupname;
                        }
                        if($combine){
                            $grps[]=$circle_groupname.'-'.$role_x_groupname;
                        }
                    }

                }

            }

            if($this->getConf('authsch_allow_outside_circles')){
                if(count($result['eduPersonEntitlement'])>0)$grps[]='user';
            }
            if(count($grps)==0)return null;
        }else{
            $grps[]='user';
        }


        // type fixes
        if (is_array($user)) $user = array_shift($user);
        if (is_array($name)) $user = array_shift($name);
        if (is_array($mail)) $user = array_shift($mail);
        if (!is_array($grps)) {
            $grps = explode(',', $grps);
            $grps = array_map('trim', $grps);
        }

        // fallbacks for user name
        if (empty($user)) {
            if (!empty($name)) {
                $user = $name;
            } elseif (!empty($mail)) {
                list($user) = explode('@', $mail);
            }
        }

        // fallback for full name
        if (empty($name)) {
            $name = $user;
        }
        return compact('user', 'name', 'mail', 'grps');
    }

    /** @inheritdoc */
    public function checkToken()
    {
        global $INPUT;
        $oauth = $this->getOAuthService();

        /** @var Abstract2Service $oauth */
        if (!$INPUT->get->has('code')) return false;
        $state = $INPUT->get->str('state', null);
        if(!$state)$state=null;
        $accessToken = $oauth->requestAccessToken($INPUT->get->str('code'), $state);

        if (
            $accessToken->getEndOfLife() !== $accessToken::EOL_NEVER_EXPIRES &&
            !$accessToken->getRefreshToken()) {
            msg('Service did not provide a Refresh Token. You will be logged out when the session expires.');
        }

        return true;
    }


    /** @inheritdoc */
    public function getScopes()
    {
        $scopes = array('basic', 'displayName');
        if ($this->getConf('authsch_mail')=='linkedAccounts.schacc' || $this->getConf('authsch_username')=='linkedAccounts.schacc'){
            $scopes[] = 'linkedAccounts';
        }
        if ($this->getConf('authsch_mail')=='mail'){
            $scopes[] = 'mail';
        }
        if($this->getConf('authsch_circles')){
            $scopes[] = 'eduPersonEntitlement';
        }
        return $scopes; // $this->getConf('scopes');
    }

    /** @inheritDoc */
    public function getLabel()
    {
        return $this->getConf('label');
    }

    /** @inheritDoc */
    public function getColor()
    {
        return $this->getConf('color');
    }
}
