<?php

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
