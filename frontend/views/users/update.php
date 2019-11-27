<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Users */

$this->title = 'Update Users : '. $model->USER_USERNAME;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->USER_USERNAME, 'url' => ['view', 'id' => $model->USER_USERNAME]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

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

   <br>
   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
