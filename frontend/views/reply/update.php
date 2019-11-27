<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reply */

$this->title = 'Update Reply: ' . $model->REPLY_ID;
$this->params['breadcrumbs'][] = ['label' => 'Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->REPLY_ID, 'url' => ['view', 'id' => $model->REPLY_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
