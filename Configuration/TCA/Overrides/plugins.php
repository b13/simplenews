<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'B13.Simplenews',
    'List',
    'News',
    'EXT:simplenews/Resources/Public/Icons/Extension.png'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('simplenews', 'Configuration/TypoScript', 'Simple News');
