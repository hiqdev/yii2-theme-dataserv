<?php

namespace hiqdev\themes\dataserv;

/**
 * Theme main asset bundle.
 */
class Asset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@hiqdev/themes/dataserv/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css',
        YII_DEBUG ? 'css/all.css' : 'css/all.min.css',
        'css/custom.css',
    ];

    public $js = [
        '//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
        YII_DEBUG ? 'js/all.js' : 'js/all.min.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        \yii\web\YiiAsset::class,
        \yii\web\JqueryAsset::class,
        \yii\bootstrap\BootstrapAsset::class,
    ];
}
