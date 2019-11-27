<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Chat */

$this->title = 'Update Chat: ' . $model->CHAT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CHAT_ID, 'url' => ['view', 'id' => $model->CHAT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
