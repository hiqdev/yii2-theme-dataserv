<?php

use hiqdev\thememanager\menus\AbstractFooterMenu;
use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\thememanager\widgets\PoweredBy;
use hiqdev\thememanager\widgets\SocialLinks;
use yii\helpers\Url;
use yii\widgets\Menu;

$bigfootMenuItmes = []; // todo: where is the BigFoot menu??
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
                        <?= Menu::widget([
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
                <?= SocialLinks::widget() ?>
            </ul>
            <p class="text-center">
                © <?= CopyrightYears::widget() ?> <?= OrganizationLink::widget() ?>.
                <?= Yii::t('hiqdev:themes:dataserv', 'All rights reserved') ?>.

                <?= PoweredBy::widget() ?>
            </p>
            <div class="text-center">
                <?= AbstractFooterMenu::widget([], ['options' => ['class' => 'list-inline']]) ?>
            </div>
        </div>
    </div>
</div>
<!-- END OF SOCIAL & COPYRIGHT -->
