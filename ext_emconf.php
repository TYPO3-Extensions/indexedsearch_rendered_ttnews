<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "indexedsearch_rendered_ttnews".
 *
 * Auto generated 18-01-2013 09:03
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Render news content for IndexedSearch Crawler tt_news',
	'description' => 'Renders the content-field for news before indexing it. Useful for f.e. rgnewsce.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '2.1.1',
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
			'rgnewsce' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:12:"ext_icon.gif";s:4:"c96c";s:17:"ext_localconf.php";s:4:"26d4";s:14:"doc/manual.pdf";s:4:"c1f6";s:14:"doc/manual.sxw";s:4:"512f";s:48:"hooks/class.tx_indexedsearch_rendered_ttnews.php";s:4:"f6f4";}',
	'suggests' => array(
	),
);

?>