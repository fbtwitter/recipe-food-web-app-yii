<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RoleModel */

$this->title = 'Create Role Model';
$this->params['breadcrumbs'][] = ['label' => 'Role Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
