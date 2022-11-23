<?php

namespace dokuwiki\plugin\oauthauthsch;

use dokuwiki\plugin\oauth\Service\AbstractOAuth2Base;
use OAuth\Common\Http\Uri\Uri;

/**
 * Custom Service for Generic oAuth
 */
class Generic extends AbstractOAuth2Base
{

    /** @inheritdoc */
    public function getAuthorizationEndpoint()
    {
        $plugin = plugin_load('helper', 'oauthauthsch');
        return new Uri('https://auth.sch.bme.hu/site/login'); // new Uri($plugin->getConf('authurl'));
    }

    /** @inheritdoc */
    public function getAccessTokenEndpoint()
    {
        $plugin = plugin_load('helper', 'oauthauthsch');
        return new Uri('https://auth.sch.bme.hu/oauth2/token'); //new Uri($plugin->getConf('tokenurl'));
    }

    /**
     * @inheritdoc
     */
    protected function getAuthorizationMethod()
    {
        $plugin = plugin_load('helper', 'oauthauthsch');

        return 2;  // Query String v1  // (int) $plugin->getConf('authmethod');
    }
}
