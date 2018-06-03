<?php
/**
 * DataServ Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-dataserv
 * @package   yii2-theme-dataserv
 * @license   proprietary
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
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
];
