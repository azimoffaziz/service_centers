<?php

use backend\models\Locations;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'zip_code')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Locations::find()->all(),'location_id','zip_code'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a Zip Code ...', 'id'=>'zipCode'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'city')->textInput() ?>

    <?= $form->field($model, 'region')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
    $script = <<<JS
    
    $('#zipCode').change(function() {
        var zipId = $(this).val();
        
        $.get('index.php?r=locations/get-city-region',{zipId : zipId}, function(data) {
            
          var data = $.parseJSON(data);
          $('#customers-city').attr('value',data.city);
          $('#customers-region').attr('value',data.region);
        });
    });
    

JS;
$this->registerJs($script);

?>
