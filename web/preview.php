<?php
require('browserrun.php');
require_once(t3lib_extMgm::extPath('newsletter')."class.tx_newsletter_mailer.php");
require_once(t3lib_extMgm::extPath('newsletter')."class.tx_newsletter_tools.php");

/* Load the page */
$rs = $TYPO3_DB->exec_SELECTquery('*', 'pages', 'uid = '.intval($_REQUEST['uid']));
$page = $TYPO3_DB->sql_fetch_assoc($rs);

/* DONT encode images..   really n/a here */
$theConf = unserialize ($TYPO3_CONF_VARS['EXT']['extConf']['newsletter']);
$theConf['attach_images'] = 0;
$TYPO3_CONF_VARS['EXT']['extConf']['newsletter'] = serialize($theConf);

$mailer = tx_newsletter_tools::getConfiguredMailer($page);
$targets = array_filter(explode(',',$page['tx_newsletter_real_target']));

/* Search the user */
foreach ($targets as $tid) {
    $tobj = tx_newsletter_target::loadTarget($tid);
    
     while ($record = $tobj->getRecord()) {
     
        /* Got it */
        if ($record['email'] == $_REQUEST['email']) {
	    $mailer->prepare($record);
	
	    if ($_REQUEST['type'] == 'plain') {
		print ('<html><head><title>'.$page['title'].'</title></head><body><pre>');
		print ($mailer->plain);
		print ('</body></html>');
	    } else {
		print (str_replace('<head>', "<head><title>$page[title]</title>", $mailer->html));
	    }
	    
	    exit(0);
	}
     }
     

}

print ('Receiver couldnt be found :-(');

?>
