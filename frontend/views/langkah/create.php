<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Langkah */

$this->title = 'Create Langkah';
$this->params['breadcrumbs'][] = ['label' => 'Langkahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="langkah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
