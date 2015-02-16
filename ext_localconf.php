<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}



// not needed?
if(!isset($GLOBALS['TYPO3_VERSION'])) {
   $GLOBALS['TYPO3_VERSION'] = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
}

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['--div--'] = 'Events';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['News->eventList;News->eventDetail'] = 'List view';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['News->eventDetail'] = 'Detail view';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['switchableControllerActions']['newItems']['News->eventDateMenu'] = 'Date menu';

?>