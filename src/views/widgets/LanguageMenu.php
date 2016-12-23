<?php

use yii\bootstrap\BootstrapPluginAsset;
use yii\helpers\Html;

/** @var array $items */

BootstrapPluginAsset::register($this);

$this->registerJs(<<<'JS'
// Language chooser popover
$('#languageChooser').popover({
    container: 'body',
    placement: 'bottom',
    trigger: 'click',
    template: '<div class="popover language-popover" role="tooltip"><div class="arrow"></div><div class="popover-content"></div></div>',
    html: true,
    content: function() {
        return jQuery('#languageChooserContent').html();
    }
});
JS
);
$this->registerCss("
.language-popover {
    width: 100%;
    background-color: rgba(20, 20, 20, 0.98);
    background-repeat: no-repeat;
    font-size: 0.8em;
}
.language-popover.popover.bottom > .arrow:after {
    border-bottom-color: rgba(20, 20, 20, 0.97);
}
.language-popover .popover-content ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    overflow: hidden;
}
.language-popover .popover-content li {
    display: inline;
    padding: 0 20px 0 40px;
    line-height: 2em;
}
.language-popover .popover-content li a {
    color: #f2f2f2;
    font-size: 0.8em;
}
");
?>
<div class="pull-right nav">
    <a href="#" data-toggle="popover" id="languageChooser" data-original-title="" title="">
        <i class="fa fa-language"></i> <?= strtoupper(substr($language, 0, 2)) ?> <span class="caret"></span>
    </a>
    <div id="languageChooserContent" class="hidden">
        <ul class="unstyled">
            <?php foreach ($items as $code => $data) : ?>
                <li>
                    <?= Html::a($data['label'], $data['url']) ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
