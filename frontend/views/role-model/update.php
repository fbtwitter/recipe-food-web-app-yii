<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RoleModel */

$this->title = 'Update Role Model: ' . $model->role_model_id;
$this->params['breadcrumbs'][] = ['label' => 'Role Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->role_model_id, 'url' => ['view', 'id' => $model->role_model_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="role-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
