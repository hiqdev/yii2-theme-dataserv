<?php
$this->title = Yii::t('hisite/page', 'About');
$this->blocks['subHeaderClass'] = 'about';
$this->blocks['subTitle'] = Yii::t('hisite/page', 'Our efforts and focus are always directed to our clients and their needs');
?>


<!-- DESCRIPTION -->
<div class="about-descr">
    <div class="row">
        <div class="col-sm-12 col-md-10 center-block">
            <h3><?= Yii::t('hisite/page', 'WHAT IS {0}?', [Yii::$app->name]) ?></h3>
            <div class="titleborder centered">
                <div class="titleborder_left"></div>
                <div class="titleborder_sign"></div>
                <div class="titleborder_right"></div>
            </div>
        </div>
    </div>

    <div class="row spacing-25">
        <div class="col-sm-12">
            <p><?= Yii::t('hisite/page', 'Originally AHnames started as a project of AdvancedHosters company.Today it is a completely independent resource, that provides domain registration and hosting (VDS) for over 7 years. AHnames team — is a staff of professionals with great experience. We strive to provide quality services and optimal solutions for all online projects.') ?></p>
            <p><?= Yii::t('hisite/page', 'AHnames customers always receive high quality technical support, an individual approach to solving problems, convenient payment system and regular discounts.') ?></p>
            <p><?= Yii::t('hisite/page', 'We provide reliable web hosting along with powerful networking and system solutions that enable our customers to realize their business goals at any level of complexity. Through our professional expertise and latest technology available on the market, AdvancedHosters provides the most efficient, reliable and easily managed solutions to meet our clients\' needs.') ?></p>
        </div>
    </div>
</div>
<!-- END OF DESCRIPTION -->

<!-- ABOUT ICONS -->
<div class="about-icons">
    <div class="row">
        <div class="col-sm-3"><i class="fa fa-mobile"></i><p><?= Yii::t('hisite/page', 'AHnames mobile app for Android') ?></p></div>
        <div class="col-sm-3"><i class="fa fa-cubes"></i><p><?= Yii::t('hisite/page', 'Convenient control panel of our own design') ?></p></div>
        <div class="col-sm-3"><i class="fa fa-clock-o"></i><p><?= Yii::t('hisite/page', 'VDS-clock monitoring') ?></p></div>
        <div class="col-sm-3"><i class="fa fa-user"></i><p><?= Yii::t('hisite/page', 'Professional technical support 24/7') ?></p></div>
    </div>
</div>
<!-- END OF ABOUT ICONS -->

<!-- TEAM -->
<div class="about-team">
    <div class="row">
        <div class="col-sm-12">
            <h3><?= Yii::t('hisite/page', 'Why {0}?', [Yii::$app->name])?></h3>
            <div class="newplans_box"></div>
            <p><?= Yii::t('hisite/page', 'We understand that reliability and speed are a top priority for internet projects. And we know how to do it. We had a great experience, and we continue to grow, listening to all the customers needs and market trends. With us you can be certain of the best solution!') ?></p>
        </div>
    </div>
</div>

<!-- END OF TEAM -->
