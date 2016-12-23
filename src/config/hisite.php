<?php

/*
 * DataServ Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-dataserv
 * @package   yii2-theme-dataserv
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'dataserv' => [
                'class' => \hiqdev\themes\dataserv\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:dataserv' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/dataserv/messages',
                ],
            ],
        ],
    ],
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\widgets\Faq::class => [
                'class' => \hiqdev\themes\dataserv\widgets\Faq::class,
            ]
        ]
    ],
];
