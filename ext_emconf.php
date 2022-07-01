<?php

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'gridelements_tester',
    'description'      => 'Gridelements tester',
    'version'          => '0.0.1',
    'state'            => 'beta',
    'clearcacheonload' => 0,
    'author'           => 'Sybille Peters',
    'author_email'     => 'sypets@gmx.de',
    'constraints'      => [
        'depends' => [
            'php'   => '7.4.0-8.0.99',
            'typo3' => '11.2.0-11.9.99',
        ],
    ],
];
