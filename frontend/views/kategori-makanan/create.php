<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriMakanan */

$this->title = 'Create Kategori Makanan';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-makanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
