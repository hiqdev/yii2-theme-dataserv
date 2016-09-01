<?php

use yii\helpers\Url;

$footerMenuItmes = Yii::$app->menuManager->footer->getItems();
?>

<?php if (!empty($footerMenuItmes)) : ?>
    <!-- FOOTER -->
    <div class="footer">
        <div class="row">
            <div class="col-sm-1"></div>
            <?php foreach ($footerMenuItmes as $item) : ?>
                <div class="col-sm-2">
                    <?php if ($item['url'] === '#') : ?>
                        <h4><?= $item['label'] ?></h4>
                    <?php else : ?>
                        <h4><a href="<?= Url::to($item['url']) ?>"><?= $item['label'] ?></a></h4>
                    <?php endif ?>
                    <?php if (isset($item['items'])) : ?>
                        <?= Yii::$app->themeManager->widget([
                            'class' => 'Menu',
                            'items' => $item['items'],
                        ]) ?>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- END FOOTER -->
<?php endif ?>

<!-- SOCIAL & COPYRIGHT -->
<div class="social">
    <div class="row">
        <div class="col-sm-12">
            <ul class="social-links">
                <?= Yii::$app->themeManager->widget('SocialLinks') ?>
            </ul>
            <p class="text-center">
                © <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>
                . All rights reserved. <?= $this->render('//layouts/_poweredBy') ?>
            </p>
        </div>
    </div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->
