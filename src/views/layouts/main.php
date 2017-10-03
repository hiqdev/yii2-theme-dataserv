<?php

/* @var $this \yii\web\View */
/* @var $content string */

use hiqdev\thememanager\widgets\Flashes;
use yii\helpers\Html;

Yii::$app->get('themeManager')->registerAssets();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= Flashes::widget() ?>

<?= $this->render('//layouts/_header') ?>
<?= $this->render('//layouts/_after_header') ?>

    <?php if (Yii::$app->errorHandler->exception) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin: 5em auto;">
                    <?= $content ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <?= $content ?>
    <?php endif; ?>

<?= $this->render('//layouts/_footer') ?>
<?= $this->render('//layouts/_after_footer') ?>

<a href="#top" id="back-to-top" class="ripple"><i class="fa fa-angle-up"></i></a>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
