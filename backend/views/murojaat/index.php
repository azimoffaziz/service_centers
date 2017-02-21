<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MurojaatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Murojaats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="murojaat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Murojaat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'full_name',
            'regions_id',
            'city_id',
            'adress',
            // 'e_mail',
            // 'tel_number',
            // 'sex',
            // 'birth_date',
            // 'status',
            // 'type_mur',
            // 'text_mur:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
