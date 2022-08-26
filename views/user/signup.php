<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title)?></h1>
    <p>Please fii out the following fields to signup: </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email') ?>
             <?= $form->field($model, 'password')->passwordInput()?>
            <div class="form-group">
                <?= Html::submitButton('signup', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
