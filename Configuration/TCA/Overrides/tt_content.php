<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$_EXTKEY = 'C1Staff';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'C1.' . $_EXTKEY,
    'List',
    'Staff List'
);

$extensionName = strtolower(\TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY));
$pluginName = strtolower('list');
$pluginSignature = $extensionName.'_'.$pluginName;

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:c1_staff/Configuration/FlexForms/flexform_list.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_c1staff_domain_model_staff', 'EXT:c1_staff/Resources/Private/Language/locallang_csh_tx_c1staff_domain_model_staff.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_c1staff_domain_model_staff');