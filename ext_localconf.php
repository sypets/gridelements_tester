<?php

defined('TYPO3_MODE') || die('Access denied.');

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:gridelements_tester/Configuration/TSconfig/Page/gridelements.tsconfig'"
    );
})();
