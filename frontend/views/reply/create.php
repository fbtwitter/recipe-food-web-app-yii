<?php

use yii\helpers\Html;
use frontend\models\Review;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reply */

$comment = Review::find()
->where('REVIEW_ID = :REVIEW_ID', [':REVIEW_ID' => $reviewID])
->one();

$this->title = $comment->REVIEW_KOMENTAR . ' from ' . $comment->REVIEW_USERNAME;
$this->params['breadcrumbs'][] = ['label' => 'Replies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
