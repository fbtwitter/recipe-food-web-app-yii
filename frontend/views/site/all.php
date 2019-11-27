<?php
use backend\models\Resep;
use frontend\models\KategoriLokasi;
use frontend\models\Likes;
use frontend\models\Review;
use frontend\models\Users;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Pawon Javanesse Cullinarie';
?>
<div id="site-index">
    
    <section id="action" class="responsive">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Cari Resep Masakanmu</h1>
                            <p>Bagikan Resep Menu Makanan Favorit Mu Kepada Semua Orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->
    <div class="review-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($modelResep, 'RESEP_JUDUL')->textInput(['placeholder' => "Cari nama resep", 'style' => 'border: 1px solid gray']) ?>

        <?php ActiveForm::end(); ?>

    </div>
    <section id="blog" class="padding-top padding-bottom">
        <div class="container">
        <?php \yii\widgets\Pjax::begin(['timeout' => 5000 ]) ?>
            <div class="row">
                <div class="masonery_area">
                <!-- start foreach -->
                <?php 
                    foreach($models as $model) {
                        $asalMakanan = KategoriLokasi::find()
                        ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $model->KATEGORI_LOKASI_ID])
                        ->one();

                        $jumLikes = Likes::find()
                        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                        ->count();

                        $jumComments = Review::find()
                        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                        ->count();
                ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div style=" margin: 0px; padding: 5px 5px 5px 5px;">
                                <div class="post-thumb">
                                    <?php 
                                        echo Html::a('<img src="' . Yii::getAlias('@fileUrl').'/'.$model->RESEP_FOTO . '"
                                        class="img-responsive" style="width:262px; height:224.567px;" alt="">', ['/resep/index', 'id' => $model->RESEP_ID]);
                                    ?>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#"><?php echo Yii::$app->formatter->asDate($model->RESEP_DATE, 'dd');?><br>
                                            <small>
                                                <?php 
                                                    $date = Yii::$app->formatter->asDate($model->RESEP_DATE, 'MM');
                                                    $monthName = date("F", mktime(0, 0, 0, $date, 10));
                                                    echo $monthName;   
                                                ?>
                                            </small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow" style="padding: 20px 0px 0px 5 px;">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i><?php echo $model->USER_USERNAME;?></a></li>
                                    </ul>
                                    <h2 class="post-title bold"><?php echo $model->RESEP_JUDUL;?></h2>
                                    <div class="post-bottom overflow">
                                        <ul class="nav nav-justified post-nav">
                                        <?php 
                                            echo '<li>'. Html::a('<i class="fa fa-heart"></i>' . $jumLikes . ' Love', ['/resep/index', 'id' => $model->RESEP_ID]) . '</li>';
                                        ?>
                                        <?php 
                                            echo '<li>'. Html::a('<i class="fa fa-comments"></i>' . $jumComments . ' Comments', ['/resep/index', 'id' => $model->RESEP_ID]) . '</li>';
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end foreach -->
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="timeline-date text-center">
        <?php echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
                ]); ?>
        <?php \yii\widgets\Pjax::end() ?>                    
    </div>
        
    </section>
</div>