<?php

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'gridelements_tester', 'Configuration/TypoScript', 'Gridelements Tester'
    );
});
