<?php

use hipanel\site\widgets\DomainSearchForm;
use yii\helpers\Html;

?>
<!-- TOP NAV -->
<div class="topmenu">
    <div class="row">
        <div class="col-sm-3">
            <ul class="top left">
                <li><i class="fa fa-envelope-o"></i>
                    24/7 <?= Yii::t('hisite', 'tech support') ?> <?= Html::mailto(Yii::$app->params['supportEmail'], Yii::$app->params['supportEmail']) ?>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <?= Yii::$app->menuManager->navbar->render([
                'options' => [
                    'class' => 'topright'
                ]
            ]) ?>
        </div>
    </div>
</div>
<!-- END OF TOP NAV -->

<!-- HEADER -->
<div class="header">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo">
                <a href="/" style="color:white;font-size:28px"><i class="fa fa-server"></i> <?= Yii::$app->name ?></a>
            </div>
        </div>
        <div class="col-sm-9">

            <nav id="desktop-menu">
                <?= Yii::$app->menuManager->main->render([
                    'options' => ['class' => 'sf-menu', 'id' => 'navigation'],
                    'activeCssClass' => 'current',
                ]) ?>
            </nav>
        </div>
    </div>
</div>
<!-- END OF HEADER -->

<?php if (!Yii::$app->get('themeManager')->isHomePage()) : ?>
    <?php if ($this->blocks['subHeaderClass'] != 'domainavailability') : ?>
        <div id="subheader" class="<?= $this->blocks['subHeaderClass'] ?: 'blog' ?>">
            <div class="subheader-text">
                <?= Html::tag('h1', $this->title) ?>
                <?= Html::tag('h2', $this->blocks['subTitle']) ?>
            </div>

            <?php if ($this->context->id == 'news' && $this->context->action->id == 'view') : ?>
                <a href="#" rel="shared-popover" data-popover-content="#shared-btn-Popover" title="Share"
                   data-placement="bottom" class="mtr-btn button-circle button-fab ripple"><i
                        class="fa fa-share-alt"></i></a>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="domainavailability">
            <div class="row">
                <div class="col-sm-12 col-md-9 center-block">
                    <?= Html::tag('h1', $this->title, ['class' => 'text-center']) ?>
                    <div class="domain-form-container">
                        <?= DomainSearchForm::widget([
                            'dropDownZonesOptions' => !empty($this->blocks['dropDownZonesOptions']) ? $this->blocks['dropDownZonesOptions'] : null
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
<?php endif ?>
