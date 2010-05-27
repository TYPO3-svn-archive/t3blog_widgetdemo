<?php

########################################################################
# Extension Manager/Repository config file for ext "t3blog_widgetdemo".
#
# Auto generated 27-05-2010 15:06
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'T3BLOG: widget demo',
	'description' => 'This extension shows how to create extra widgets for t3blog extension. See README.txt inside the extension.',
	'category' => 'fe',
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry.dulepov@gmail.com',
	'shy' => '',
	'dependencies' => 't3blog',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'Snowflake Productions Gmbh',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			't3blog' => '0.9.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"3b50";s:10:"README.txt";s:4:"3643";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"5785";s:14:"ext_tables.php";s:4:"612a";s:16:"static/setup.txt";s:4:"1084";s:48:"widgets/class.tx_t3blogwidgetdemo_getwidgets.php";s:4:"d5d4";s:49:"widgets/trend/class.tx_t3blogwidgetdemo_trend.php";s:4:"068d";s:27:"widgets/trend/locallang.xml";s:4:"8b3b";}',
	'suggests' => array(
	),
);

?>