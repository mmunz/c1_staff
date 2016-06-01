<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'C1.' . $_EXTKEY,
	'List',
	array(
		'Staff' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Staff' => '',
	)
);
