<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CentersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'center_name') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'regions_id') ?>

    <?= $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'service_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
