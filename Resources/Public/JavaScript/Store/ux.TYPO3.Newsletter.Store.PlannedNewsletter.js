"use strict";

Ext.ns('Ext.ux.TYPO3.Newsletter.Store');

/**
 * A Store for the plannedNewsletter model using ExtDirect to communicate with the
 * server side extbase framework.
 */
Ext.ux.TYPO3.Newsletter.Store.PlannedNewsletter = function() {
	
	var plannedNewsletterStore = null;
	
	var initialize = function() {
		if (plannedNewsletterStore == null) {
			plannedNewsletterStore = new Ext.data.DirectStore({
				storeId: 'Tx_Newsletter_Domain_Model_PlannedNewsletter',
				reader: new Ext.data.JsonReader({
					totalProperty:'total',
					successProperty:'success',
					idProperty:'__identity',
					root:'data',
					fields:[
					    {name: '__identity', type: 'int'},
						{name: 'domain', type: 'string'},
						{name: 'injectLinksSpy', type: 'boolean'},
						{name: 'injectOpenSpy', type: 'boolean'},
						{name: 'isTest', type: 'boolean'},
						{name: 'plannedTime', type: 'date'},
						{name: 'repetition', type: 'int'},
						{name: 'senderEmail', type: 'string'},
						{name: 'senderName', type: 'string'},
						{name: 'title', type: 'string'},
						{name: 'status', type: 'string'},
						{name: 'errors', convert: function(v, newsletter) { return convertMessages(newsletter, 'errors'); }},
						{name: 'warnings', convert: function(v, newsletter) { return convertMessages(newsletter, 'warnings'); }},
						{name: 'infos', convert: function(v, newsletter) { return convertMessages(newsletter, 'infos'); }}
					]
				})
			});
		}
	}
	
	function convertMessages(newsletter, level)
	{
		var html = '';
		Ext.each(newsletter.validatedContent[level], function(e){
			html = html + '<li>' + e + '</li>';
		})
		
		if (html == '')
			html = '<li class="none">' + Ext.ux.TYPO3.Newsletter.Language.none + '</li>';
		
		html = '<ul class="' + level + '">' +  html + '</ul>';
		return html;
	}
	
	/**
	 * Public API of this singleton.
	 */
	return {
		initialize: initialize
	}
}();
