<?php

$TYPO3_CONF_VARS['EXTCONF']['indexedsearch_ttnews_crawler']['indexSingleNewsRecord']['indexedsearch_rendered_ttnews'] = t3lib_extMgm::extPath($_EXTKEY).'hooks/class.tx_indexedsearch_rendered_ttnews.php:&tx_indexedsearch_rendered_ttnews';

// Special adjustments for rgnewsce because it's class is just loaded if this is TYPO3-frontend.
if (t3lib_extMgm::isLoaded('rgnewsce')) {
	require_once(t3lib_extMgm::extPath('rgnewsce').'class.tx_rgnewsce_fe.php');
	require_once(t3lib_extMgm::extPath('css_styled_content').'pi1/class.tx_cssstyledcontent_pi1.php');
}
