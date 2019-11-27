<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Langkah */

$this->title = 'Update Langkah: ' . $model->LANGKAH_ID;
$this->params['breadcrumbs'][] = ['label' => 'Langkahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LANGKAH_ID, 'url' => ['view', 'id' => $model->LANGKAH_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="langkah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
