<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Murojaat */

$this->title = 'Update Murojaat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Murojaats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="murojaat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
