<?php

namespace hiqdev\themes\dataserv;

/**
 * Theme class.
 */
class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'DataServ';

    public $screenshot = '@hiqdev/themes/dataserv/assets/dataserv.png';

    public $assets = [
        Asset::class,
    ];
}
