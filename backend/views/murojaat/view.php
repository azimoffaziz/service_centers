<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Murojaat */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Murojaats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="murojaat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'regions_id',
            'city_id',
            'adress',
            'e_mail',
            'tel_number',
            'sex',
            'birth_date',
            'status',
            'type_mur',
            'text_mur:ntext',
        ],
    ]) ?>

</div>
