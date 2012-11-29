<?php

########################################################################
# Extension Manager/Repository config file for ext "indexedsearch_rendered_ttnews".
#
# Auto generated 24-09-2012 12:47
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Render news content for IndexedSearch Crawler tt_news',
	'description' => 'Renders the content-field for news before indexing it. Useful for f.e. rgnewsce.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'indexedsearch_ttnews_crawler',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Simon Schick',
	'author_email' => 'simonsimcity@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'indexedsearch_ttnews_crawler' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'rgnewsce' => ''
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:8:"TODO.txt";s:4:"953a";s:13:"changelog.txt";s:4:"34ba";s:17:"ext_localconf.php";s:4:"98b4";s:14:"ext_tables.php";s:4:"b94d";s:14:"ext_tables.sql";s:4:"3146";s:44:"hooks/class.tx_indexedsearch_newscrawler.php";s:4:"c4f8";}',
	'suggests' => array(
	),
);
