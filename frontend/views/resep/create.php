<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resep */

$this->title = 'Create Resep';
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-create">

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?= Html::encode($this->title) ?></h1>
                            <p>tes tes tes tes</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>

    <?= $this->render('_form2', [
        'model' => $model,
        'modelsBahan' => $modelsBahan,
        'modelsLangkah' => $modelsLangkah,
        'dropdownLokasi' => $dropdownLokasi,
        'dropdownMakanan' => $dropdownMakanan,
    ]) ?>

</div>
