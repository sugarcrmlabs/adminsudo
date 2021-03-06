<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.0.0',
  'acceptable_sugar_versions' =>
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' =>
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'raw',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => false,
  'name' => 'Sudo User Functionality',
  'published_date' => '2016-11-01 17:43:07',
  'type' => 'module',
  'version' => time(),
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'copy' =>
	array (
	 0 =>
		array (
		  'from' => '<basepath>/custom/include/javascript/login_as.js',
		  'to' => 'custom/include/javascript/login_as.js',
		),
	  1 =>
		array (
		  'from' => '<basepath>/custom/Extension/modules/Users/Ext/Language/en_us.login_as.php',
		  'to' => 'custom/Extension/modules/Users/Ext/Language/en_us.login_as.php',
		),
	  2 =>
		array (
		  'from' => '<basepath>/custom/modules/Users/views/view.detail.php',
		  'to' => 'custom/modules/Users/views/view.detail.php',
		),
	  3 =>
		array (
		  'from' => '<basepath>/custom/modules/Users/metadata/detailviewdefs.php',
		  'to' => 'custom/modules/Users/metadata/detailviewdefs.php',
		),
	  4 =>
		array (
		  'from' => '<basepath>/custom/clients/base/views/profileactions/profileactions.js',
		  'to' => 'custom/clients/base/views/profileactions/profileactions.js',
		),
	  5 =>
		array (
		  'from' => '<basepath>/custom/clients/base/layouts/footer/footer.js',
		  'to' => 'custom/clients/base/layouts/footer/footer.js',
		),
	  6 =>
		array (
		  'from' => '<basepath>/custom/clients/base/layouts/footer/footer.hbs',
		  'to' => 'custom/clients/base/layouts/footer/footer.hbs',
		),
	  7 =>
		array (
		  'from' => '<basepath>/custom/clients/base/api/CustomSudoApi.php',
		  'to' => 'custom/clients/base/api/CustomSudoApi.php',
		),
  ),
);

