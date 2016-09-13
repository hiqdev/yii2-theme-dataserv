<?php

use yii\helpers\Url;

$bigfootMenuItmes = Yii::$app->menuManager->bigfoot->getItems();
?>

<?php if (!empty($bigfootMenuItmes)) : ?>
    <!-- FOOTER -->
    <div class="footer">
        <div class="row">
            <div class="col-sm-1"></div>
            <?php foreach ($bigfootMenuItmes as $item) : ?>
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
                © <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>.
                All rights reserved. <?= Yii::$app->menuManager->footer->render() ?>
                <?= Yii::$app->themeManager->widget('PoweredBy') ?>
            </p>
        </div>
    </div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->
