<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\PanelTopCart;
use hiqdev\pnotify\Alert;
use hisite\modules\news\widgets\NewsRotatorWidget;
use yii\helpers\Html;
use yii\widgets\Menu;

$menuItems = [
    ['label' => Yii::t('hisite', 'Domains'), 'url' => '#', 'items' => [
        ['label' => Yii::t('hisite', 'Prices'), 'url' => ['/domain/prices']],
        ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/domain/advantages']],
        ['label' => Yii::t('hisite', 'Transfer'), 'url' => ['/domainchecker/transfer/index']],
        ['label' => Yii::t('hisite', 'Premium Package'), 'url' => ['/domain/premium-package']],
//        ['label' => Yii::t('hisite', 'Whois lookup'), 'url' => ['/domain/whois-lookup']],
    ]],
    ['label' => Yii::t('hisite', 'Hosting'), 'url' => '#', 'items' => [
        ['label' => Yii::t('hisite', 'XEN SSD'), 'url' => ['/hosting/xen-ssd']],
        ['label' => Yii::t('hisite', 'OpenVZ'), 'url' => ['/hosting/open-vz']],
        ['label' => Yii::t('hisite', 'Tariffs details'), 'url' => ['/hosting/tariffs-details']],
        ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/hosting/advantages']],
        ['label' => Yii::t('hisite', 'What is VDS'), 'url' => ['/hosting/what-is-vds']],
    ]],
    ['label' => Yii::t('hisite', 'For resellers'), 'url' => '#', 'items' => [
        ['label' => Yii::t('hisite', 'Prices'), 'url' => ['/reseller/prices']],
        ['label' => Yii::t('hisite', 'Advantages'), 'url' => ['/reseller/advantages']],
        ['label' => Yii::t('hisite', 'API'), 'url' => ['/reseller/api']],
    ]],
    ['label' => Yii::t('hisite', 'News'), 'url' => '/news/article/index'],
    ['label' => Yii::t('hisite', 'Help'), 'url' => '#', 'items' => [
        ['label' => Yii::t('hisite', 'FAQ'), 'url' => ['/help/faq']],
    ]],
];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <?= Html::cssFile(YII_DEBUG ? '@web/css/all.css' : '@web/css/all.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/all.min.css'))) ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Alert::widget(); ?>
<!-- TOP NAV -->
<div class="topmenu">
    <div class="row">
        <div class="col-sm-3">
            <ul class="top left">
                <li><i class="fa fa-envelope-o"></i> 24/7 <?= Yii::t('hisite', 'tech support') ?> <?= Html::mailto('support@ahnames.com', 'support@ahnames.com') ?></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <ul class="topright">
                <?= PanelTopCart::widget() ?>
                <?php if (Yii::$app->user->isGuest) : ?>
                    <li><i class="fa fa-unlock-alt"></i> <a href="#" data-toggle="modal" data-target="#LoginModal">CLIENT AREA</a></li>
                <?php else : ?>
                    <li><?= Html::a(Yii::t('hisite', 'PANEL'), '#'); ?></li>
                <?php endif; ?>
                <!--li><i class="fa fa-commenting-o"></i> <a href="#"><?= Yii::t('hisite', 'ONLINE CHAT') ?></a></li-->
                <?= \app\widgets\LanguageDropdown::widget() ?>
            </ul>
        </div>
    </div>
</div>
<!-- END OF TOP NAV -->

<!-- HEADER -->
<div class="header">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo">
                <a href="/"><?= Html::img('/images/logo.png') ?></a>
            </div>
        </div>
        <div class="col-sm-9">

            <nav id="desktop-menu">
                <?= Menu::widget([
                    'options' => ['class' => 'sf-menu', 'id' => 'navigation'],
                    'activeCssClass' => 'current',
                    'items' => $menuItems,
                ]) ?>
            </nav>
        </div>
    </div>
</div>
<!-- END OF HEADER -->

<?php if (\app\helpers\ThemeHelper::isHomePage() === false) : ?>
    <?php if ($this->blocks['subHeaderClass'] != 'domainavailability') : ?>
        <div id="subheader" class="<?= $this->blocks['subHeaderClass'] ? : 'blog' ?>">
            <div class="subheader-text">
                <?= Html::tag('h1', $this->title) ?>
                <?= Html::tag('h2', $this->blocks['subTitle']) ?>
            </div>

            <?php if ($this->context->id == 'news' && $this->context->action->id == 'view') : ?>
                <a href="#" rel="shared-popover" data-popover-content="#shared-btn-Popover" title="Share" data-placement="bottom" class="mtr-btn button-circle button-fab ripple"><i class="fa fa-share-alt"></i></a>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="domainavailability">
            <div class="row">
                <div class="col-sm-12 col-md-9 center-block">
                    <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
                    <div class="domain-form-container">
                        <?= \app\widgets\DomainSearchForm::widget([
                            'dropDownZonesOptions' => !empty($this->blocks['dropDownZonesOptions']) ? $this->blocks['dropDownZonesOptions'] : null
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?= $content ?>
<?php else : ?>
    <?= \app\widgets\DomainAvailabilityWidget::widget() ?>
    <?= \app\widgets\NewPlansWidget::widget() ?>
    <?= \app\widgets\PricingboxWidget::widget() ?>
    <?= \app\widgets\OurAppWidget::widget() ?>
    <?= NewsRotatorWidget::widget() ?>
<?php endif; ?>

<!-- FOOTER -->
<div class="footer">
    <div class="row">

        <div class="col-sm-3">
            <h4><?= Yii::t('hisite', 'Domains') ?></h4>
            <?= Menu::widget([
                'items' => $menuItems[0]['items'],
            ]) ?>
        </div>

        <div class="col-sm-3">
            <h4><?= Yii::t('hisite', 'Hosting') ?></h4>
            <?= Menu::widget([
                'items' => $menuItems[1]['items'],
            ]) ?>
        </div>

        <div class="col-sm-3">
            <h4><?= Yii::t('hisite', 'For resellers') ?></h4>
            <?= Menu::widget([
                'items' => $menuItems[2]['items'],
            ]) ?>
        </div>

        <div class="col-sm-3">
            <h4><?= Yii::t('hisite', 'Other') ?></h4>
            <?= Menu::widget([
                'items' => [
                    ['label' => Yii::t('hisite', 'About us'), 'url' => ['/site/page', 'view' => 'about']],
                    ['label' => Yii::t('hisite', 'Contacts'), 'url' => ['/site/contact']],
                    ['label' => Yii::t('hisite', 'Promotions'), 'url' => ['/site/page', 'view' => 'promotions']],
                    ['label' => Yii::t('hisite', 'Loyalty program'), 'url' => ['/site/page', 'view' => 'loyalty-program']],
                    ['label' => Yii::t('hisite', 'Rules'), 'url' => ['/site/page', 'view' => 'rules']],
                ],
            ]) ?>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- SOCIAL & COPYRIGHT -->
<div class="social">
    <div class="row">
        <div class="col-sm-12">
            <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Vkontakte"><i class="fa fa-vk"></i></a></li>
                <li><a href="#" title="Github"><i class="fa fa-github-alt"></i></a></li>
            </ul>
            <p class="text-center">Copyright© DataServ. All rights reserved.</p>
        </div>
    </div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->

<!-- LOGIN MODAL -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
    <div class="modal-dialog" role="document">
        <form method="post" action="http://whmcs.audemedia.com/dologin.php?systpl=dataservwhmcs" class="material">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-lock"></i>LOGIN TO YOUR ACCOUNT</h4>
                </div>
                <div class="modal-body">
                    <input type="text" name="username" placeholder="E-mail Address">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" class="mtr-btn button-fab">LOGIN</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END OF LOGIN MODAL -->
<a href="#top" id="back-to-top" class="ripple"><i class="fa fa-angle-up"></i></a>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<?= Html::jsFile(YII_DEBUG ? '@web/js/all.js' : '@web/js/all.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.min.js'))) ?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
