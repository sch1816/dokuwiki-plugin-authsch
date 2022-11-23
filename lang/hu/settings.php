<?php
/**
 * english language file for oauthauthsch plugin
 *
 * @author Andreas Gohr <dokuwiki@cosmocode.de>
 */

$lang['key'] = 'Kliens azonosító (auth.sch.bme.hu)';
$lang['secret'] = 'Kliens kulcs (auth.sch.bme.hu)';
$lang['authurl'] = 'URL to the authentication endpoint';
$lang['tokenurl'] = 'URL to the token endpoint';
$lang['userurl'] = 'URL to the user info API endpoint (must return JSON about the authenticated user)';
$lang['authmethod'] = 'Authorization method used when talking to the user API';
$lang['scopes'] = 'Scopes to request (comma separated)';

$lang['json-user'] = 'Access to the username in dot notation';
$lang['json-name'] = 'Access to the full name in dot notation';
$lang['json-mail'] = 'Access to the user email in dot notation';
$lang['json-grps'] = 'Access to the user groups in dot notation';

$lang['label'] = 'Login button felirat';
$lang['color'] = 'Login button színe';

$lang['authmethod_o_0'] = 'OAuth Header';
$lang['authmethod_o_1'] = 'Bearer Header';
$lang['authmethod_o_6'] = 'Token Header';
$lang['authmethod_o_2'] = 'Query String v1';
$lang['authmethod_o_3'] = 'Query String v2';
$lang['authmethod_o_4'] = 'Query String v3';
$lang['authmethod_o_5'] = 'Query String v4';


$lang['json-user'] = 'Access to the username in dot notation';
$lang['json-name'] = 'Access to the full name in dot notation';
$lang['json-mail'] = 'Access to the user email in dot notation';
$lang['json-grps'] = 'Access to the user groups in dot notation';

$lang['authsch_circles'] = 'Körök (PéK ID) -> DokuWiki Csoportok: JSON összerendelés';
$lang['authsch_roles'] = 'Kör poszt -> DokuWiki Csoportok: JSON összerendelés';
$lang['authsch_korvez_role'] = 'Körvezető DokuWiki Csoport';
$lang['authsch_oreg_role'] = 'Öregtag DokuWiki Csoport';
$lang['authsch_tag_role'] = 'Körtag DokuWiki Csoport';
$lang['authsch_combine_circles_roles'] = 'A körök és posztok csoportneveinek kombinálása';
$lang['authsch_allow_outside_circles'] = 'A beállított körökön kívülről is engedje be az embereket (user csoporttal)';
$lang['authsch_mail'] = 'E-mail cím forrása';
$lang['authsch_mail_o_mail'] = 'saját e-mail cím';
$lang['authsch_mail_o_linkedAccounts.schacc'] = 'sch.bme.hu e-mail cím';

$lang['authsch_username'] = 'Username forrása';
$lang['authsch_username_o_internal_id'] = 'internal id';
$lang['authsch_username_o_linkedAccounts.schacc'] = 'schacc';
