<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Feslider',
	array(
		'Item' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Item' => 'create, update, delete',
		
	)
);

?>