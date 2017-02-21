<?php

use frontend\models\City;
use frontend\models\Regions;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Murojaat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="murojaat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regions_id')->dropDownList(
        ArrayHelper::map(Regions::find()->all(),'id','region_name'),
        ['prompt'=>'Select region',
            'onchange'=>'
         $.post("index.php?r=regions/lists&id='.'"+$(this).val(), function(data){
            $("select#murojaat-city_id").html(data);
         });'
        ]); ?>

    <?= $form->field($model, 'city_id')->dropDownList(
        ArrayHelper::map(City::find()->all(),'id','city_name'),
        ['prompt'=>'Select branch']
    ) ?>


    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_mur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_mur')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
