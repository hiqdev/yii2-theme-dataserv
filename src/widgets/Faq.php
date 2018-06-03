<?php
/**
 * DataServ Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-dataserv
 * @package   yii2-theme-dataserv
 * @license   proprietary
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\dataserv\widgets;

use hiqdev\themes\dataserv\FaqAsset;
use yii\base\Widget;

class Faq extends Widget
{
    public $items = [];

    public function run()
    {
        FaqAsset::register($this->view);

        return $this->render('faq/root', [
            'items' => $this->items,
        ]);
    }
}
