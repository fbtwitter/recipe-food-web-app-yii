<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriLokasi */

$this->title = 'Create Kategori Lokasi';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Lokasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-lokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
