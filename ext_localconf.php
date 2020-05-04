<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'B13.Simplenews',
    'List',
    [
        'Main' => 'list,detail',
    ],
    // No uncacheable plugin actions
    []
);

