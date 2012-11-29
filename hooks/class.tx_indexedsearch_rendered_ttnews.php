<?php

class tx_indexedsearch_rendered_ttnews {

	/**
	 * @param array $fieldList
	 * @param array $r
	 * @param tx_ttnews $tt_news
	 * @return array
	 */
	public function indexSingleNewsRecord(array $fieldList, array $r, tx_ttnews $tt_news) {

		// Add ###NEWS_CONTENT### to the list of markers that need to be rendered
		if (
			!is_array($tt_news->renderMarkers) ||
			!$tt_news->isRenderMarker('###NEWS_CONTENT###')
		)
			$tt_news->renderMarkers[] = '###NEWS_CONTENT###';

		// Load tt_news in single-view
		$tt_news->config['code'] = 'SINGLE';

		// Render markers for single-view
		$markerArray = $tt_news->getItemMarkerArray(
			$r,
			$tt_news->conf['displaySingle.']);

		// Replace the row's body-text by it's rendered value
		$r['bodytext'] = $markerArray['###NEWS_CONTENT###'];

		return $r;
	}
}
