<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CentersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Centers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Centers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'center_name',
            'phone_number',
            'regions_id',
            'city_id',
            // 'adress',
            // 'service_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
