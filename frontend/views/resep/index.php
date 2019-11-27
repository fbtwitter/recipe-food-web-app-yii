<?php

use yii\helpers\Html;
use frontend\models\Bahan;
use frontend\models\Langkah;
use frontend\models\Likes;
use frontend\models\Users;
use frontend\models\KategoriLokasi;
use frontend\models\Reply;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reseps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-index">

    
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                        <h1 class="title"><?= Html::encode($this->title) ?></h1>
                            <p>Be Creative</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <?php 
        $asalMakanan = KategoriLokasi::find()
        ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $model->KATEGORI_LOKASI_ID])
        ->one();
    ?>

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4" style="width:400px;height:700px;">
                    <img src="<?= Yii::getAlias('@fileUrl').'/'.$model->RESEP_FOTO; ?>" class="img-responsive" alt="">
                </div>
                <div class="col-xs-8">
                    <div class="project-name overflow">
                        <h2 class="bold" style="font-weight: revert;"><?php echo $model->RESEP_JUDUL;?></h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><h4><i class="fa fa-clock-o"></i><?php echo Yii::$app->formatter->asDate($model->RESEP_DATE, 'medium');?></h4></a></li>
                            <li><a href="#"><h4><i class="fa fa-tag"></i><?php echo $asalMakanan->KATEGORI_LOKASI_NAMA;?></h4></a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Deskripsi Makanan</h3>
                        <p><?php echo $model->RESEP_DESKRIPSI;?></p>
                        <!-- <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                        </ul> -->
                    </div>
                    <div class="skills overflow">
                        <h3>Bahan-bahan yang dibutuhkan :</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <?php 
                                $bahan = Bahan::find()
                                ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                                ->all();
                                foreach($bahan as $bahans) {
                            ?>
                                <li><a><h4><i class="fa fa-check-square"></i><?php echo $bahans->BAHAN_NAMA;?></h4></a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <div class="client overflow">
                        <h3>Langkah-langkah Memasak :</h3>
                    <div id="team-carousel" class="carousel slide wow fadeIn" style="margin-top:0px;" data-ride="carousel" data-wow-duration="400ms"
                        data-wow-delay="1000ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <?php 
                        $langkah = Langkah::find()
                        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                        ->all();
                    ?>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="max-height: 160px">
                        <?php 
                            foreach($langkah as $langkahs) {
                            $i=0; 
                            if($i == 0) {
                        ?>
                        <div class="item active">
                        <?php } else {?>
                        <div class="item">
                        <?php } $i++;?>
                            <div class="col-sm-12 col-xs-6" style="border: solid 1px gray;">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <h2><?php echo "Langkah "; echo $langkahs->LANGKAH_NO;?></h2>
                                            <p><?php echo $langkahs->LANGKAH_NAMA;?></p>                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- Controls -->
                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-content overflow">
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                        <?php 
                                            $like = Likes::find()
                                            ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                                            ->count();


                                        ?>
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                            <?php 
                                                $iniLike = Likes::find()
                                                ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
                                                ->andWhere('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => Yii::$app->user->identity->username])
                                                ->count();

                                                if($iniLike == 1){
                                                    echo '<li>'. Html::a('<i class="fa fa-heart"></i>' . $like . ' likes', ['/like/index', 'id' => $model->RESEP_ID]) . '</li>';
                                                }else {
                                                    echo '<li>'. Html::a('<i class="fa fa-heart-o"></i>' . $like . ' likes', ['/like/index', 'id' => $model->RESEP_ID]) . '</li>';
                                                }
                                            ?>
                                            <li><a href="#"><i class="fa fa-comments"></i><?php echo $countReview;?> Comments</a></li>
                                        </ul>
                                    </div>
                                    <?php 
                                        $user = Users::find()
                                        ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => $model->USER_USERNAME])
                                        ->one();
                                    ?>
                                    <div class="author-profile padding">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="<?= Yii::getAlias('@fileUrl').'/'.$user->USER_FOTO; ?>" alt="" style="width:170px; height:167px;">
                                            </div>
                                            <div class="col-sm-10">
                                                <h3><?php echo $user->USER_NAMA_LENGKAP;?></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                                                <span>Email : <a href="www.jooomshaper.com"><?php echo $user->USER_EMAIL;?></a></span>
                                                <h3><?= Html::a('Kirim Pesan', ['/chat/add', 'username' => $model->USER_USERNAME], ['class' => 'btn btn-block btn-primary', 'style'=>'margin-top:27px']) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="response-area">
                                    <h2 class="bold" style="font-weight: revert;">Comments</h2>
                                    <div class="review-form">

                                        <?php $form = ActiveForm::begin(); ?>
                                        <div class="row">
                                                <div class="col-xs-11">
                                                <?= $form->field($modelReview, 'REVIEW_KOMENTAR')->textArea(['placeholder' => "Berikan komentarmu", 'style' => 'border: 1px solid gray']) ?>
                                                </div>
                                                <div class="col-xs-1">
                                                <?= Html::submitButton('Post', ['class' => 'btn btn-block btn-success', 'style'=>'margin-top:25px']) ?>
                                                </div>
                                                
                                        </div>
                                        

                                        <div class="form-group">
                                           
                                        </div>

                                        <?php ActiveForm::end(); ?>

                                    </div>
                                    <?php 
                                        if($countReview > 0) {
                                        foreach($review as $isiReview) {
                                            $profileReview = Users::find()
                                            ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => $isiReview->REVIEW_USERNAME])
                                            ->one();
                                    ?>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="post-comment">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="<?= Yii::getAlias('@fileUrl').'/'.$profileReview->USER_FOTO; ?>" alt="" style="width:127px; height:137px;">
                                                </a>
                                                <div class="media-body">
                                                    <span><i class="fa fa-user"></i>Posted by <a href="#"><?php echo $profileReview->USER_NAMA_LENGKAP;?></a></span>
                                                    <p><?php echo $isiReview->REVIEW_KOMENTAR;?></p>
                                                    <ul class="nav navbar-nav post-nav">
                                                        <li><a href="#"><i class="fa fa-clock-o"></i><?php echo Yii::$app->formatter->asDate($isiReview->REVIEW_DATE, 'medium');?></a></li>
                                                        <li>
                                                                <?= Html::button('<i class="fa fa-reply"></i> Reply', ['value'=>Url::to(['reply/create' , 'reviewID' => $isiReview->REVIEW_ID, 'resepID' => $model->RESEP_ID]), 'id' => 'modalButton']) ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            <!-- Bahan untuk modal diatas -->
                                            <?php 
                                                Modal::begin([
                                                    'header' => '<h4>Reply</h4>',
                                                    'id' => 'modal',
                                                    'size' => 'modal-lg',
                                                ]);

                                                echo "<div id='modalContent'></div>";
                                                Modal::end();
                                            ?>

                                            <!-- check ada reply atau tidak -->
                                            <?php 
                                                $countReply = Reply::find()
                                                ->where('REVIEW_ID = :REVIEW_ID', [':REVIEW_ID' => $isiReview->REVIEW_ID])
                                                ->count();

                                                if($countReply > 0) {
                                                    $modelReply = Reply::find()
                                                    ->where('REVIEW_ID = :REVIEW_ID', [':REVIEW_ID' => $isiReview->REVIEW_ID])
                                                    ->All();

                                                    foreach($modelReply as $reply) {
                                            ?>
                                            <div class="parrent">
                                                <ul class="media-list">
                                                    <li class="post-comment reply">
                                                        <a class="pull-left" href="#">
                                                            <img class="media-object" src="<?= Yii::getAlias('@fileUrl').'/'.$profileReview->USER_FOTO; ?>" alt="" style="width:127px; height:137px;">
                                                        </a>
                                                        <div class="media-body">
                                                            <span><i class="fa fa-user"></i>Posted by <a href="#"><?php echo $reply->REPLY_USERNAME;?></a></span>
                                                            <p><?php echo $reply->REPLY_BALASAN;?></p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><a href="#"><i class="fa fa-clock-o"></i><?php echo Yii::$app->formatter->asDate($reply->REPLY_DATE, 'medium');?></a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>      
                                        <?php } } } }?>             
                                </div><!--/Response-area-->
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>
     <!--/#portfolio-information-->

     <section id="related-work" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">Masakan Serupa</h1>
                
                <?php foreach ($resep as $resepmodel) { 
                    
                    ?>
                <div class="col-sm-3">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="<?= Yii::getAlias('@fileUrl').'/'.$resepmodel->RESEP_FOTO; ?>" class="img-responsive" alt="" style="width:262px; height:255px;">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="<?= Yii::getAlias('@fileUrl').'/'.$resepmodel->RESEP_FOTO; ?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info ">
                            <h2><?php echo $resepmodel->RESEP_JUDUL; ?></h2>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>
</div>
