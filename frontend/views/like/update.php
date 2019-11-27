<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Likes */

$this->title = 'Update Likes: ' . $model->LIKE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Likes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LIKE_ID, 'url' => ['view', 'id' => $model->LIKE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="likes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
