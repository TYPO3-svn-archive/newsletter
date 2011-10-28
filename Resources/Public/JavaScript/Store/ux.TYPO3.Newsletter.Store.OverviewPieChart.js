"use strict";

Ext.ns('Ext.ux.TYPO3.Newsletter.Store');

Ext.ux.TYPO3.Newsletter.Store.initOverviewPieChart = function() {

	var store;
	store = new Ext.data.JsonStore({
		storeId: 'overviewPieChart',
		root: 'data',
		fields: ['label', 'data'],
		remoteSort: false
	});

	// When a newsletter is selected, we update the data for the pie chart
	Ext.StoreMgr.get('Tx_Newsletter_Domain_Model_SelectedNewsletter').on(
		'datachanged',
		function (selectedNewsletterStore) {
			var newsletter = selectedNewsletterStore.getAt(0);
			this.loadData({
				data:[
				{
					label: Ext.ux.TYPO3.Newsletter.Language.not_sent,
					data: newsletter.json.emailNotSentCount
				},
				{
					label: Ext.ux.TYPO3.Newsletter.Language.sent,
					data: newsletter.json.emailSentCount
				}, 
				{
					label: Ext.ux.TYPO3.Newsletter.Language.opened,
					data: newsletter.json.emailOpenedCount
				},
				{
					label: Ext.ux.TYPO3.Newsletter.Language.bounced,
					data: newsletter.json.emailBouncedCount
				}
				]
			});
		},
		store
		);
	
	return store;
};
