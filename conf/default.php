<?php
/**
 * Default settings for the oauthauthsch plugin
 */

$conf['key'] = '';
$conf['secret'] = '';

// $conf['authurl'] = 'https://auth.sch.bme.hu/site/login';
// $conf['tokenurl'] = 'https://auth.sch.bme.hu/oauth2/token';
// $conf['userurl'] = 'https://auth.sch.bme.hu/api/profile/';
// $conf['authmethod'] = 2;
// $conf['scopes'] = 'basic, displayName, mail, linkedAccounts, eduPersonEntitlement';

// $conf['json-user'] = 'linkedAccounts.schacc';
// $conf['json-name'] = 'displayName';
// $conf['json-mail'] = 'mail';
// $conf['json-grps'] = '';

$conf['label'] = 'AuthSch';
$conf['color'] = '#163c65';

$conf['authsch_circles'] = '{
    "144": "bulis",
    "357": "hetifonok",
    "137": "szakest",
    "482": "levelup",
    "481": "schorpong",
    "465": "justdance",
    "393": "parkett",
     "56": "dezso",
    "421": "lanosch",
    "434": "cc"
}';
$conf['authsch_roles'] = '{
    "PR menedzser": "pr",
    "gazdaságis": "gazdasagis"
}';
$conf['authsch_korvez_role'] = 'korvez';
$conf['authsch_oreg_role'] = 'oreg';
$conf['authsch_tag_role'] = 'tag';
$conf['authsch_combine_circles_roles'] = 0;
$conf['authsch_allow_outside_circles'] = 0;
$conf['authsch_mail'] = 'linkedAccounts.schacc';
$conf['authsch_username'] = 'linkedAccounts.schacc';
