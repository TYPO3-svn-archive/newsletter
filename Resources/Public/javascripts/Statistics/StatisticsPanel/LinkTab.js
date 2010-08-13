"use strict";

Ext.ns("TYPO3.Newsletter.Statistics.StatisticsPanel");

/**
 * @class TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab
 * @namespace TYPO3.Newsletter.Statistics.StatisticsPanel
 * @extends Ext.Container
 *
 * Class for statistic container
 *
 * $Id$
 */
TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab = Ext.extend(Ext.Container, {

	initComponent: function() {
		var config = {
			layout:'table',
			layoutConfig: {
				columns: 1
			},
			items: [
				{
					xtype: 'TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab.General',
					ref: 'general'
				},
			]
		};
		Ext.apply(this, config);
		TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab.superclass.initComponent.call(this);
	}
});

Ext.reg('TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab', TYPO3.Newsletter.Statistics.StatisticsPanel.LinkTab);