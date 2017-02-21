<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Murojaat */

$this->title = 'Create Murojaat';
$this->params['breadcrumbs'][] = ['label' => 'Murojaats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="murojaat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
