<?php

use frontend\models\City;
use frontend\models\Regions;
use frontend\models\Services;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Centers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="centers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'center_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regions_id')->dropDownList(
        ArrayHelper::map(Regions::find()->all(),'id','region_name'),
        ['prompt'=>'Select region',
            'onchange'=>'
         $.post("index.php?r=regions/lists&id='.'"+$(this).val(), function(data){
            $("select#centers-city_id").html(data);
         });'
        ]); ?>

    <?= $form->field($model, 'city_id')->dropDownList(
        ArrayHelper::map(City::find()->all(),'id','city_name'),
        ['prompt'=>'Select branch']
    ) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <?php $services = ArrayHelper::map(Services::find()->all(),'id','service_name');
    echo $form->field($model,'service_id')->checkboxlist(
        $services
    )->label('Tanlang');
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
