<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'C1.C1Staff',
	'List',
	array(
		'Staff' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Staff' => '',
	)
);
