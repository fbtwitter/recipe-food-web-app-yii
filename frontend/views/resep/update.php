<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */

$this->title = 'Update Resep: ' . $model->RESEP_ID;
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RESEP_ID, 'url' => ['view', 'id' => $model->RESEP_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
