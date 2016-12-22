<?php

namespace hiqdev\themes\dataserv;

use hipanel\assets\LessSpaceAsset;
use hiqdev\assets\icheck\iCheckAsset;
use hiqdev\assets\pnotify\PNotifyAsset;
use yii\bootstrap\BootstrapAsset;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;

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

        'css/bootstrap-theme.min.css',
        'css/block_grid_bootstrap.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/animate-custom.css',
        'css/slicknav.min.css',
        'css/tablesaw.css',
        'css/odometer-theme-default.css',
        'css/style.css',
        'css/custom.css',
    ];

    public $js = [
        'js/morphext.min.js',
        'js/hoverIntent.js',
        'js/superfish.min.js',
        'js/owl.carousel.js',

        'js/ripple-effect.js',
        'js/wow.min.js',
        'js/jquery.form.min.js',
        'js/jquery.slicknav.min.js',
        'js/retina.min.js',
        'js/isotope.pkgd.min.js',
        'js/tablesaw.js',
        'js/tablesaw-init.js',
        'js/responsiveEqualHeight.js',

        'js/hisite.js',
        'js/custom.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
        BootstrapAsset::class,
        LessSpaceAsset::class,
        PNotifyAsset::class,
        iCheckAsset::class,
    ];
}
