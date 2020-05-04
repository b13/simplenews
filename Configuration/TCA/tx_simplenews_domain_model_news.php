<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:simplenews/Resources/Private/Language/backend.xlf:simplenews',
        'label' => 'title',
        'label_alt' => 'publishedon',
        'label_alt_force' => true,
        'tstamp' => 'lastupdatedon',
        'crdate' => 'createdon',
        'versioningWS' => true,
        'default_sortby' => 'publishedon DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'isdisabled',
        ],
        'iconfile' => 'EXT:simplenews/Resources/Public/Icons/Extension.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'title, contents, slug, publishedon'
    ],
    'columns' => [
        'isdisabled' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => ''
                    ]
                ],
                'default' => 0
            ]
        ],
        'title' => [
            'label' => 'LLL:EXT:simplenews/Resources/Private/Language/backend.xlf:simplenews.title',
            'config' => [
                'type' => 'input',
                'eval' => 'required'
            ]
        ],
        'slug' => [
            'label' => 'LLL:EXT:simplenews/Resources/Private/Language/backend.xlf:simplenews.slug',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => [
                    'fields' => ['title'],
                ],
                'fallbackCharacter' => '-',
                'eval' => 'unique',
            ]
        ],
        'contents' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simplenews/Resources/Private/Language/backend.xlf:simplenews.contents',
            'config' => [
                'type' => 'text',
                'rows' => 30,
                'cols' => 80,
                'softref' => 'typolink_tag,images,email[subst],url',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'publishedon' => [
            'exclude' => true,
            'label' => 'LLL:EXT:simplenews/Resources/Private/Language/backend.xlf:simplenews.publishedon',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0
            ]
        ],

    ],
    'types' => [
        '1' => ['showitem' => 'title, --palette--;;common, slug, contents']
    ],
    'palettes' => [
        'common' => ['showitem' => 'publishedon, isdisabled']
    ]
];
