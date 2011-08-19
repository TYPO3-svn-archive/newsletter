<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * RecipientList
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Newsletter_Domain_Model_RecipientList extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string $title
	 */
	protected $title;

	/**
	 * plainOnly
	 *
	 * @var boolean $plainOnly
	 */
	protected $plainOnly;

	/**
	 * lang
	 *
	 * @var string $lang
	 */
	protected $lang;

	/**
	 * type
	 *
	 * @var string $type
	 */
	protected $type;

	/**
	 * beUsers
	 *
	 * @var string $beUsers
	 */
	protected $beUsers;

	/**
	 * feGroups
	 *
	 * @var string $feGroups
	 */
	protected $feGroups;

	/**
	 * fePages
	 *
	 * @var string $fePages
	 */
	protected $fePages;

	/**
	 * csvUrl
	 *
	 * @var string $csvUrl
	 */
	protected $csvUrl;

	/**
	 * csvSeparator
	 *
	 * @var string $csvSeparator
	 */
	protected $csvSeparator;

	/**
	 * csvFields
	 *
	 * @var string $csvFields
	 */
	protected $csvFields;

	/**
	 * csvFilename
	 *
	 * @var string $csvFilename
	 */
	protected $csvFilename;

	/**
	 * csvValues
	 *
	 * @var string $csvValues
	 */
	protected $csvValues;

	/**
	 * sqlStatement
	 *
	 * @var string $sqlStatement
	 */
	protected $sqlStatement;

	/**
	 * sqlRegisterBounce
	 *
	 * @var string $sqlRegisterBounce
	 */
	protected $sqlRegisterBounce;

	/**
	 * sqlRegisterOpen
	 *
	 * @var string $sqlRegisterOpen
	 */
	protected $sqlRegisterOpen;

	/**
	 * sqlRegisterClick
	 *
	 * @var string $sqlRegisterClick
	 */
	protected $sqlRegisterClick;

	/**
	 * htmlFile
	 *
	 * @var string $htmlFile
	 */
	protected $htmlFile;

	/**
	 * htmlFetchType
	 *
	 * @var string $htmlFetchType
	 */
	protected $htmlFetchType;

	/**
	 * calculatedRecipients
	 *
	 * @var string $calculatedRecipients
	 */
	protected $calculatedRecipients;

	/**
	 * confirmedRecipients
	 *
	 * @var string $confirmedRecipients
	 */
	protected $confirmedRecipients;

	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Setter for plainOnly
	 *
	 * @param boolean $plainOnly plainOnly
	 * @return void
	 */
	public function setPlainOnly($plainOnly) {
		$this->plainOnly = $plainOnly;
	}

	/**
	 * Getter for plainOnly
	 *
	 * @return boolean plainOnly
	 */
	public function getPlainOnly() {
		return $this->plainOnly;
	}

	/**
	 * Returns the state of plainOnly
	 *
	 * @return boolean the state of plainOnly
	 */
	public function isPlainOnly() {
		return $this->getPlainOnly();
	}

	/**
	 * Setter for lang
	 *
	 * @param string $lang lang
	 * @return void
	 */
	public function setLang($lang) {
		$this->lang = $lang;
	}

	/**
	 * Getter for lang
	 *
	 * @return string lang
	 */
	public function getLang() {
		return $this->lang;
	}

	/**
	 * Setter for type
	 *
	 * @param string $type type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Setter for beUsers
	 *
	 * @param string $beUsers beUsers
	 * @return void
	 */
	public function setBeUsers($beUsers) {
		$this->beUsers = $beUsers;
	}

	/**
	 * Getter for beUsers
	 *
	 * @return string beUsers
	 */
	public function getBeUsers() {
		return $this->beUsers;
	}

	/**
	 * Setter for feGroups
	 *
	 * @param string $feGroups feGroups
	 * @return void
	 */
	public function setFeGroups($feGroups) {
		$this->feGroups = $feGroups;
	}

	/**
	 * Getter for feGroups
	 *
	 * @return string feGroups
	 */
	public function getFeGroups() {
		return $this->feGroups;
	}

	/**
	 * Setter for fePages
	 *
	 * @param string $fePages fePages
	 * @return void
	 */
	public function setFePages($fePages) {
		$this->fePages = $fePages;
	}

	/**
	 * Getter for fePages
	 *
	 * @return string fePages
	 */
	public function getFePages() {
		return $this->fePages;
	}

	/**
	 * Setter for csvUrl
	 *
	 * @param string $csvUrl csvUrl
	 * @return void
	 */
	public function setCsvUrl($csvUrl) {
		$this->csvUrl = $csvUrl;
	}

	/**
	 * Getter for csvUrl
	 *
	 * @return string csvUrl
	 */
	public function getCsvUrl() {
		return $this->csvUrl;
	}

	/**
	 * Setter for csvSeparator
	 *
	 * @param string $csvSeparator csvSeparator
	 * @return void
	 */
	public function setCsvSeparator($csvSeparator) {
		$this->csvSeparator = $csvSeparator;
	}

	/**
	 * Getter for csvSeparator
	 *
	 * @return string csvSeparator
	 */
	public function getCsvSeparator() {
		return $this->csvSeparator;
	}

	/**
	 * Setter for csvFields
	 *
	 * @param string $csvFields csvFields
	 * @return void
	 */
	public function setCsvFields($csvFields) {
		$this->csvFields = $csvFields;
	}

	/**
	 * Getter for csvFields
	 *
	 * @return string csvFields
	 */
	public function getCsvFields() {
		return $this->csvFields;
	}

	/**
	 * Setter for csvFilename
	 *
	 * @param string $csvFilename csvFilename
	 * @return void
	 */
	public function setCsvFilename($csvFilename) {
		$this->csvFilename = $csvFilename;
	}

	/**
	 * Getter for csvFilename
	 *
	 * @return string csvFilename
	 */
	public function getCsvFilename() {
		return $this->csvFilename;
	}

	/**
	 * Setter for csvValues
	 *
	 * @param string $csvValues csvValues
	 * @return void
	 */
	public function setCsvValues($csvValues) {
		$this->csvValues = $csvValues;
	}

	/**
	 * Getter for csvValues
	 *
	 * @return string csvValues
	 */
	public function getCsvValues() {
		return $this->csvValues;
	}

	/**
	 * Setter for sqlStatement
	 *
	 * @param string $sqlStatement sqlStatement
	 * @return void
	 */
	public function setSqlStatement($sqlStatement) {
		$this->sqlStatement = $sqlStatement;
	}

	/**
	 * Getter for sqlStatement
	 *
	 * @return string sqlStatement
	 */
	public function getSqlStatement() {
		return $this->sqlStatement;
	}

	/**
	 * Setter for sqlRegisterBounce
	 *
	 * @param string $sqlRegisterBounce sqlRegisterBounce
	 * @return void
	 */
	public function setSqlRegisterBounce($sqlRegisterBounce) {
		$this->sqlRegisterBounce = $sqlRegisterBounce;
	}

	/**
	 * Getter for sqlRegisterBounce
	 *
	 * @return string sqlRegisterBounce
	 */
	public function getSqlRegisterBounce() {
		return $this->sqlRegisterBounce;
	}

	/**
	 * Setter for sqlRegisterOpen
	 *
	 * @param string $sqlRegisterOpen sqlRegisterOpen
	 * @return void
	 */
	public function setSqlRegisterOpen($sqlRegisterOpen) {
		$this->sqlRegisterOpen = $sqlRegisterOpen;
	}

	/**
	 * Getter for sqlRegisterOpen
	 *
	 * @return string sqlRegisterOpen
	 */
	public function getSqlRegisterOpen() {
		return $this->sqlRegisterOpen;
	}

	/**
	 * Setter for sqlRegisterClick
	 *
	 * @param string $sqlRegisterClick sqlRegisterClick
	 * @return void
	 */
	public function setSqlRegisterClick($sqlRegisterClick) {
		$this->sqlRegisterClick = $sqlRegisterClick;
	}

	/**
	 * Getter for sqlRegisterClick
	 *
	 * @return string sqlRegisterClick
	 */
	public function getSqlRegisterClick() {
		return $this->sqlRegisterClick;
	}

	/**
	 * Setter for htmlFile
	 *
	 * @param string $htmlFile htmlFile
	 * @return void
	 */
	public function setHtmlFile($htmlFile) {
		$this->htmlFile = $htmlFile;
	}

	/**
	 * Getter for htmlFile
	 *
	 * @return string htmlFile
	 */
	public function getHtmlFile() {
		return $this->htmlFile;
	}

	/**
	 * Setter for htmlFetchType
	 *
	 * @param string $htmlFetchType htmlFetchType
	 * @return void
	 */
	public function setHtmlFetchType($htmlFetchType) {
		$this->htmlFetchType = $htmlFetchType;
	}

	/**
	 * Getter for htmlFetchType
	 *
	 * @return string htmlFetchType
	 */
	public function getHtmlFetchType() {
		return $this->htmlFetchType;
	}

	/**
	 * Setter for calculatedRecipients
	 *
	 * @param string $calculatedRecipients calculatedRecipients
	 * @return void
	 */
	public function setCalculatedRecipients($calculatedRecipients) {
		$this->calculatedRecipients = $calculatedRecipients;
	}

	/**
	 * Getter for calculatedRecipients
	 *
	 * @return string calculatedRecipients
	 */
	public function getCalculatedRecipients() {
		return $this->calculatedRecipients;
	}

	/**
	 * Setter for confirmedRecipients
	 *
	 * @param string $confirmedRecipients confirmedRecipients
	 * @return void
	 */
	public function setConfirmedRecipients($confirmedRecipients) {
		$this->confirmedRecipients = $confirmedRecipients;
	}

	/**
	 * Getter for confirmedRecipients
	 *
	 * @return string confirmedRecipients
	 */
	public function getConfirmedRecipients() {
		return $this->confirmedRecipients;
	}

	
	
	

	var $fields;
	var $data;
   
	/**
	 * This is the object factory, without init(), for all newsletter targets.
	 *
	 * @final
	 * @static
	 * @param     integer     Uid of a Tx_Newsletter_Domain_Model_RecipientList from the database.
	 * @return    object      Of newsletter_target type.
	 */
	public static function getTarget($uid) {
		global $TYPO3_DB;
		$rs = $TYPO3_DB->sql_query("SELECT * FROM tx_newsletter_domain_model_recipientlist WHERE uid = $uid");
		$fields = $TYPO3_DB->sql_fetch_assoc($rs);
		$object = new $fields['type'];
		if (!is_subclass_of($object, 'Tx_Newsletter_Domain_Model_RecipientList'))
		{
			die ("Ooops..   $fields[targettype] is not a Tx_Newsletter_Domain_Model_RecipientList child class");
		}
		
		$object->fields = $fields;
		$object->uid = $uid;
		return $object;
	}
   
	/**
	 * This is the object factory, with init(), for all newsletter targets.
	 *
	 * @final
	 * @static
	 * @param     integer     Uid of a Tx_Newsletter_Domain_Model_RecipientList from the database.
	 * @return    object      Of newsletter_target type.
	 */
	public static function loadTarget($uid) {
		$object = self::getTarget($uid);
		$object->init();
		return $object;
	}
   
	/**
	 * This is the method called when a newsletter_target is produced in the loadTarget factory
	 *
	 * @abstract
	 * @return    void
	 */
	function init() {
		die ('You need to implement the init-method.');
	}

	/**
	 * Fetch one receiver record from the newsletter target. 
	 * The record MUST contain an "email"-field. Without this one this mailtarget is useless.
	 * For compatibility with various subscription systems, the record can contain "tableName"-field.
	 *
	 * @abstract
	 * @return   array      Assoc array with fields for the receiver
	 */
	function getRecipient() {
		die ('You need to implement the getRecipient-method.');
	}
   
	/**
	 * Get the number of receivers in this newsletter target
	 *
	 * @abstract
	 * @return   integer      Numbers of receivers.
	 */
	function getCount() {
		die ('You need to implement the getCount-method.');   
	}
   
	/**
	 * Get error text if the fetching of the newsletter target has somehow failed.
	 *
	 * @abstract
	 * @return   string      Error text or empty string.
	 */
	function getError() {
		die ('You need to implement the getError-method.');   
	}
	   
	/**
	 * Here you can define an action when an address bounces. This can either be database operations such a a deletion. 
	 * For external data-sources, you might consider collecting the addresses for later removal from the foreign system. 
	 * The Tx_Newsletter_Domain_Model_RecipientList_Sql implements a sensible default. "tableName" should also be included 
	 * for compatibility reasons.
	 *
	 * @param string $email the email address of the recipient
	 * @param   integer    Status of the bounce expect: NEWSLETTER_HARDBOUNCE or NEWSLETTER_SOFTBOUNCE 
	 * @return  bool       Status of the success of the removal.
	 */
	function registerBounce($email, $bounce_type) {
		return false;
	}

	/**
	 * Here you can implement some action to take when ever the user has opened the mail via beenthere.php
	 *
	 * @param string $email the email address of the recipient (who opened the mail)
	 * @return	void
	 */
	function registerOpen($email) {
	}

	/**
	 * Here you can implement some action to take when ever the user has clicked a link via click.php
	 *
	 * @param string $email the email address of the recipient
	 * @return	void
	 */
	function registerClick($email) {
	}
	
	/**
	 * Return HTML code showing an extract of recipients (first X recipients)
	 */
	public function getExtract($limit = 30)
	{
		if ($this->getError()) {
			$out = "Error: " . $this->getError();
		}
		else
		{
			$i = 0;
			while ($row = $this->getRecipient())
			{
				// Dump formatted table header
				if ($i == 0)
				{
					$out .= '<tr>';
					foreach (array_keys($row) as $key) {
						$out .= '<th style="padding-right: 1em;">' . $this->getFieldTitle($key). "</th>";
					}
					$out .= '</tr>';
				}
		
				$out .= '<tr style="border: 1px grey solid; border-collapse: collapse;">';
				foreach ($row as $field) {
					$out .= '<td style="padding-right: 1em;">' . $field .'</td>';
				}
				$out .= '</tr>';
		
				if (++$i == $limit) {
					break;
				}
			}
			
			
			$authCode = t3lib_div::stdAuthCode($this->fields);
			$out = '<table style="border: 1px grey solid; border-collapse: collapse;">'.$out.'</table>';
			
			$out .= '<p><strong>' . $i . '/' . $this->getCount() . '</strong> recipients
			(<a href="'.t3lib_extMgm::extRelPath('newsletter')."web/xmldownload.php?authCode=$authCode&uid=" . $this->getUid() . "\">export XML</a>, "
			.'<a href="'.t3lib_extMgm::extRelPath('newsletter')."web/csvdownload.php?authCode=$authCode&uid=" . $this->getUid() . "\">export CSV</a>"
			.')</p>';
		}
		
		$out = '<h4>' . $this->fields['title'] . '</h4>' . $out;
		return $out;
	}
	
	/**
	 * Returns the fieldname style according to validation
	 * Green => special field recognized
	 * Red => field which cannot be used within newsletter with 'markers' features
	 * normal => field which can be used within newsletter
	 * @param string $fieldname
	 */
	private static function getFieldTitle($fieldname)
	{
		switch ($fieldname) {
			case 'email':
			case 'plain_only':
			case 'authCode':
			case 'uid':
			case 'tableName':
			case 'L':
				return '<span style="color: green;">'.$fieldname.'</span>';

			default:
				if (preg_match ('/_[0-9]+$/', $fieldname)) {
					return '<span style="color: red;">'.$fieldname.'</span>';
				} else {
					return $fieldname;
				}
		}
	}
}
?>