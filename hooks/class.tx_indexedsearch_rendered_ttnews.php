<?php

// Special adjustments for rgnewsce because it's class is just loaded if this is TYPO3-frontend.
if (t3lib_extMgm::isLoaded('rgnewsce')) {
    require_once(t3lib_extMgm::extPath('rgnewsce').'class.tx_rgnewsce_fe.php');
    require_once(t3lib_extMgm::extPath('css_styled_content').'pi1/class.tx_cssstyledcontent_pi1.php');
}

class tx_indexedsearch_rendered_ttnews {

	/**
	 * @param array $fieldList
	 * @param array $r
	 * @param tx_ttnews $tt_news_original
	 * @return array
	 */
	public function indexSingleNewsRecord(array $fieldList, array $r, tx_ttnews $tt_news_original) {

		$tt_news = clone $tt_news_original;

		// Add ###NEWS_CONTENT### to the list of markers that need to be rendered
		$tt_news->renderMarkers = array('###NEWS_CONTENT###');

		// Load tt_news in single-view
		$tt_news->config['code'] = 'SINGLE';

		// Disable caching, as this is not a normal page-rendering process
		$tt_news->allowCaching = false;

		// Create local copy of the record
		$localRecord = $r;

		// Don't render images here!
		unset($localRecord['image']);

		// Render markers for single-view
		$markerArray = $tt_news->getItemMarkerArray(
            $localRecord,
			$tt_news->conf['displaySingle.']);

		// Replace the row's body-text by it's rendered value
		$r['bodytext'] = $markerArray['###NEWS_CONTENT###'];

		return $r;
	}
}
