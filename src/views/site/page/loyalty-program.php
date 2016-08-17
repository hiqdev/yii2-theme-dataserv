<?php
use yii\helpers\Html;

$this->title = Yii::t('hisite/page', 'Loyalty program');

?>

<div class="about-team">
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <?= Yii::t('hisite/page', '{0} loyalty program:', [Yii::$app->name])?><br>
                <?= Yii::t('hisite/page', 'the longer you’re with us the cheaper your VDS is!?') ?>
            </h3>
            <div class="newplans_box"></div>
            <p>
                <?= Yii::t('hisite/page', 'Dear friends!') ?><br>
                <?= Yii::t('hisite/page', 'To express our gratitude to everyone who has chosen our services, we have created a loyalty program for our clients.') ?>
                <?= Yii::t('hisite/page', 'The meaning of the program is to make the VDS as beneficial as possible, not for once but constantly and for all tariff plans.') ?>
                <?= Yii::t('hisite/page', 'Our system is very simple; there are no credits, complex calculations and exchange points for dubious discounts.') ?>
            </p>
            <p>
                <b><?= Yii::t('hisite/page', 'First stage of our loyalty program starts on November 1st: 1% of discount for each month of using VDS!') ?></b>
            </p>
            <p>
                <?= Yii::t('hisite/page', 'Renew any VDS tariff plan each month and receive a 1% discount increase for the next month. To participate in our loyalty program, create an account on our website and purchase any suitable VDS tariff plan.') ?>
                <?= Yii::t('hisite/page', 'For example, if you order a VDS tariff plan with the price that is specified on our website, next month you’ll receive a 1% discount, 2% discount in two months and so on.') ?>
                <br>
                <?= Yii::t('hisite/page', 'Maximum discount is') ?> <b><?= Yii::t('hisite/page', '25% in 2 years') ?></b>.
            </p>
            <p class="text-center"><?= Html::img(sprintf('/images/custom/loyalty_%s.png', Yii::$app->language)); ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <h4><?= Yii::t('hisite/page', 'Please note!') ?></h4><br>
            <p class="text-left">
                <?= Yii::t('hisite/page', 'When purchasing services with promotional prices, discounts from loyalty program don’t count. Also, discounts don’t apply to excessive use of resources and additional services.') ?>
            </p>
        </div>
        <p>
            <?= Yii::t('hisite/page', 'All accrued discounts will be displayed in VDS section of your hosting panel on the VDS info page. Also the date and rate of the next discount are available.') ?>
        </p>
        <p>
            <?= Yii::t('hisite/page', 'Second stage of AHnames loyalty program will be released very soon! All discounts calculated within the loyalty program will be added to all VDS tariff plans permanently. Follow our news and AHnames hosting will become even more beneficial.') ?>
        </p>
    </div>
</div>
