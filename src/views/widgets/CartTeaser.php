<?php

/** @var object $cart */
/** @var object $widget */

$positionsCount = count($cart->positions);
$this->registerCss("#top-cart span.cart-count { background-color: #999; padding: 0 5px;}");
if ($positionsCount > 0) {
    $this->registerCss("#top-cart span.cart-count { background-color: #FF4081!important; padding: 0 5px;}");
}
?>
<div id="top-cart" class="pull-right nav">
    <?php if ($positionsCount > 0) : ?>
        <a href="<?= $widget->module->createUrl() ?>" class="quick-nav">
            <i class="fa fa-shopping-cart"></i>
            <span class="hidden-xs"><?= Yii::t('hiqdev:themes:dataserv', 'Cart') ?></span>&nbsp;&nbsp;<span
                class="cart-count"><?= $positionsCount ?></span>
        </a>
    <?php else: ?>
        <span>
        <i class="fa fa-shopping-cart"></i>
        <span class="hidden-xs"><?= Yii::t('hiqdev:themes:dataserv', 'Cart') ?></span>&nbsp;&nbsp;<span
                class="cart-count"><?= $positionsCount ?></span>
        </span>
    <?php endif; ?>
</div>