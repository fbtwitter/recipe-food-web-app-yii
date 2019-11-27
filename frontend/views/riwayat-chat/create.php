<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiwayatChat */

$this->title = 'Create Riwayat Chat';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-chat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
