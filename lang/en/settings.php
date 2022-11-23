<?php
/**
 * english language file for oauthauthsch plugin
 *
 * @author Andreas Gohr <dokuwiki@cosmocode.de>
 */

$lang['key'] = 'The Application UID (auth.sch.bme.hu)';
$lang['secret'] = 'The Application Secret (auth.sch.bme.hu)';
$lang['authurl'] = 'URL to the authentication endpoint';
$lang['tokenurl'] = 'URL to the token endpoint';
$lang['userurl'] = 'URL to the user info API endpoint (must return JSON about the authenticated user)';
$lang['authmethod'] = 'Authorization method used when talking to the user API';
$lang['scopes'] = 'Scopes to request (comma separated)';

$lang['json-user'] = 'Access to the username in dot notation';
$lang['json-name'] = 'Access to the full name in dot notation';
$lang['json-mail'] = 'Access to the user email in dot notation';
$lang['json-grps'] = 'Access to the user groups in dot notation';

$lang['label'] = 'Label to display on the login button';
$lang['color'] = 'Color to use with the login button';

$lang['authmethod_o_0'] = 'OAuth Header';
$lang['authmethod_o_1'] = 'Bearer Header';
$lang['authmethod_o_6'] = 'Token Header';
$lang['authmethod_o_2'] = 'Query String v1';
$lang['authmethod_o_3'] = 'Query String v2';
$lang['authmethod_o_4'] = 'Query String v3';
$lang['authmethod_o_5'] = 'Query String v4';

$lang['authsch_circles'] = 'Circles (PéK ID) -> DokuWiki groups: JSON';
$lang['authsch_roles'] = 'Circle role -> DokuWiki groups: JSON';
$lang['authsch_korvez_role'] = 'Circle leader DokuWiki group';
$lang['authsch_oreg_role'] = 'Past members DokuWiki group';
$lang['authsch_tag_role'] = 'Member DokuWiki group';
$lang['authsch_combine_circles_roles'] = 'Combine circle and role group names';
$lang['authsch_allow_outside_circles'] = 'Allow schacc login outside listed groups (with user group)';
$lang['authsch_mail'] = 'Source of e-mail address';
$lang['authsch_mail_o_mail'] = 'own mail address';
$lang['authsch_mail_o_linkedAccounts.schacc'] = 'sch.bme.hu mail address';

$lang['authsch_username'] = 'Source of user name';
$lang['authsch_username_o_internal_id'] = 'internal id';
$lang['authsch_username_o_linkedAccounts.schacc'] = 'schacc';
