"use strict";

Ext.ns("TYPO3.Newsletter.Store");

TYPO3.Newsletter.Store.initOverviewPieChart = function() {

	var store;
	store = new Ext.data.JsonStore({
		storeId: 'overviewPieChart',
//		autoLoad: false,
		remoteSort: false,
		fields: ['label', 'total'],
		data: []
	});

	TYPO3.Newsletter.Store.Statistics.on(
		'TYPO3.Newsletter.Store.Statistics.afterload',
		function (records) {
			var record;
			record = records[0];
			this.removeAll();
			this.add(new Ext.data.Record({
					label: TYPO3.Newsletter.Language.opened,
					total: record.json.number_of_opened
				})
			);
			this.add(new Ext.data.Record({
					label: TYPO3.Newsletter.Language.not_opened,
					total: record.json.number_of_not_opened
				})
			);
			this.add(new Ext.data.Record({
					label: TYPO3.Newsletter.Language.bounced,
					total: record.json.number_of_bounced
				})
			);
		},
		store
	);
	return store;
};
