<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Bahan */

$this->title = 'Update Bahan: ' . $model->BAHAN_ID;
$this->params['breadcrumbs'][] = ['label' => 'Bahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BAHAN_ID, 'url' => ['view', 'id' => $model->BAHAN_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
