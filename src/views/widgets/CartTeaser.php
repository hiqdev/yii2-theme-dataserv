<?php

/** @var object $cart */
/** @var object $widget */

$positionsCount = count($cart->positions);
if ($positionsCount > 0) {
    $this->registerCss("span.badge { background-color: #FF4081!important; }");
}
?>
<div id="top-cart" class="pull-right nav">
    <a href="<?= $widget->module->createUrl() ?>" class="quick-nav">
        <i class="fa fa-shopping-cart"></i>
        <span class="hidden-xs"><?= Yii::t('hisite', 'View Cart') ?> <span class="badge"><?= $positionsCount ?></span></span>
    </a>
</div>