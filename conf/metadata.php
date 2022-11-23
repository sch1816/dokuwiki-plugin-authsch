<?php
/**
 * Options for the oauthauthsch plugin
 */

$meta['key'] = array('string');
$meta['secret'] = array('string');

// $meta['authurl'] = array('string');
// $meta['tokenurl'] = array('string');
// $meta['userurl'] = array('string');
// $meta['authmethod'] = array('multichoice', '_choices' => [0, 1, 6, 2, 3, 4, 5]);
// $meta['scopes'] = array('array');

// $meta['json-user'] = array('string');
// $meta['json-name'] = array('string');
// $meta['json-mail'] = array('string');
// $meta['json-grps'] = array('string');

$meta['label'] = array('string');
$meta['color'] = array('string');

$meta['authsch_circles'] = array('');
$meta['authsch_roles'] = array('');
$meta['authsch_korvez_role'] = array('string');
$meta['authsch_oreg_role'] = array('string');
$meta['authsch_tag_role'] = array('string');
$meta['authsch_combine_circles_roles'] = array('onoff');
$meta['authsch_allow_outside_circles'] = array('onoff','_caution' => 'security');

$meta['authsch_mail']  = array('multichoice','_choices' => array('mail', 'linkedAccounts.schacc'),'_caution' => 'security');
$meta['authsch_username']  = array('multichoice','_choices' => array('internal_id', 'linkedAccounts.schacc'), '_caution' => 'danger');

