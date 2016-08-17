<div id="top-cart" class="pull-right nav">
    <a href="<?= $widget->module->createUrl() ?>" class="quick-nav">
        <i class="fa fa-shopping-cart"></i>
        <span class="hidden-xs"><?= Yii::t('hisite', 'View Cart') ?> <span class="badge"><?= count($cart->positions) ?></span></span>
    </a>
</div>