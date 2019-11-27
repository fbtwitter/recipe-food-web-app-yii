<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LangkahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Langkahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="langkah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['/resep/tampil'], ['class' => 'btn btn-primary']) ?>
    </p>
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'LANGKAH_NO',
            'LANGKAH_NAMA:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
