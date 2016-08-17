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
        'css/all.css',
    ];

    public $js = [];

    /**
     * @inheritdoc
     */
    /*
    public $depends = [
        \yii\web\YiiAsset::class,
        \yii\bootstrap\BootstrapAsset::class,
    ];
    */
}
