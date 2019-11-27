<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiwayatChat */

$this->title = 'Update Riwayat Chat: ' . $model->RIWAYAT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->RIWAYAT_ID, 'url' => ['view', 'id' => $model->RIWAYAT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-chat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
