<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('hisite', 'Login');
$this->blocks['subTitle'] = Yii::t('hisite', 'This page is restricted');
?>
<section id="main-body" class="container">

    <div class="row">
        <!-- Container for main page display content -->
        <div class="col-xs-12 main-content">

            <div class="logincontainer">

                <div class="header-lined">
                    <h1>
                        <small></small>
                    </h1>
                </div>
                <?php

                $form = ActiveForm::begin([
                    'id' => 'login-form',
//                    'options' => ['class' => 'form-horizontal'],
//                    'fieldConfig' => [
//                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
//                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
//                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
//                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

                <?php ActiveForm::end(); ?>


            </div>

        </div><!-- /.main-content -->
    </div>
    <div class="clearfix"></div>
</section>
