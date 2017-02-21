<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Centers */

$this->title = 'Create Centers';
$this->params['breadcrumbs'][] = ['label' => 'Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="centers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
