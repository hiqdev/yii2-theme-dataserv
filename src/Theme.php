<?php

namespace hiqdev\themes\dataserv;

use Yii;

/**
 * Theme class.
 */
class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'DataServ';

    public $assets = [
        Asset::class,
    ];
}
