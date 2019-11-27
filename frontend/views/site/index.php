<?php
use backend\models\Resep;
use frontend\models\KategoriLokasi;
use frontend\models\Likes;
use frontend\models\Review;
use frontend\models\Users;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Pawon Javanesse Cullinarie';
?>
<div id="site-index">
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                    <h1 style="color:white; font-weight:normal;">Hi, Welcome to Pawon Jawa</h1>
                        <p style="font-size:larger; color:white;">Pawon jawa adalah sebuah website yang berisikan sejuta
                            resep menu makan dan minuman khas dari Pulau Jawa</p>
                        <a href="#blog" class="btn btn-common" style="border: 1px solid white;color: white;font-size: inherit;font-weight: bold;">Cari Resep Makananmu</a>
                    </div>
                    <!-- <img src="/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                    <img src="/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="/images/home/slider/birds1.png" class="slider-birds1" alt="slider image"> -->

                </div>
            </div>
        </div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="action count">
                <div class="col-sm-6 text-center padding wow fadeIn action count" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <?php
                            $jumPengguna = Users::find()
                            ->count();
                        ?>
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="<?php echo $jumPengguna;?>" data-speed="3000" data-from="0"></h1>     
                        </div>
                        <h2>Pengguna</h2>
                    </div>
                </div>
                <div class="col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <?php
                            $jumResep = Resep::find()
                            ->count();
                        ?>
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                        <h1 class="timer bold" data-to="<?php echo $jumResep;?>" data-speed="3000" data-from="0"></h1>
                        </div>
                        <h2>Resep</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Buat Resep Masakanmu</h1>
                            <p>Bagikan Resep Menu Makanan Favorit Mu Kepada Semua Orang</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms"
                            data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">SIGN UP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="team" style="border-bottom: 1px solid #C03035;">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Masakan Favorit Hari Ini</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Manjakan lidahmu dengan membuat resep impian</p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms"
                    data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <?php 
                                $jumResep = Resep::find()
                                ->where('RESEP_DATE >= CURDATE()')
                                ->orderBy(['RESEP_ID' => SORT_DESC])
                                ->limit(8)
                                ->count();

                                $resep = Resep::find()
                                ->where('RESEP_DATE >= CURDATE()')
                                ->orderBy(['RESEP_ID' => SORT_DESC])
                                ->limit(8)
                                ->All();
                                $i=0;
                                foreach($resep as $model) {
                                    $asalMakanan = KategoriLokasi::find()
                                    ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $model->KATEGORI_LOKASI_ID])
                                    ->one();
                            ?>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <img src="<?= Yii::getAlias('@fileUrl').'/'.$model->RESEP_FOTO; ?>" class="img-responsive" alt="" style="width: 270px; height: 255px;">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><?= Html::a('<i class="fa fa-eye"></i>',['/resep/index', 'id' => $model->RESEP_ID]) ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2><?php echo $model->RESEP_JUDUL;?></h2>
                                        <p><?php echo $asalMakanan->KATEGORI_LOKASI_NAMA;?></p>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; if($i == 4) {break;} } ?> <!-- end of foreach -->
                        </div>
                        <?php if($jumResep > 4) {?>
                        <div class="item">
                        <?php 
                            $i=0;
                            foreach($resep as $model) {
                                $asalMakanan = KategoriLokasi::find()
                                ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $model->KATEGORI_LOKASI_ID])
                                ->one();
                                if($i > 3) {
                        ?>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                        <img src="<?= Yii::getAlias('@fileUrl').'/'.$model->RESEP_FOTO; ?>" class="img-responsive" alt="" style="width: 262px; height: 255px;">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><?= Html::a('<i class="fa fa-eye"></i>',['/resep/index', 'id' => $model->RESEP_ID]) ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2><?php echo $model->RESEP_JUDUL;?></h2>
                                        <p><?php echo $asalMakanan->KATEGORI_LOKASI_NAMA;?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } $i++; } ?> <!-- end of foreach -->
                        </div>
                                <?php }?>
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="masonery_area">
                <!-- start foreach -->
                <?php 
                    $resep = Resep::find()
                    ->orderBy(['RESEP_ID' => SORT_DESC])
                    ->limit(8)
                    ->All();
                    foreach($resep as $model) {
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
                                        class="img-responsive" alt="">', ['/resep/index', 'id' => $model->RESEP_ID]);
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
                <div class="timeline-date text-center">
                        <a href="/site/all" class="btn btn-common">See More</a>
                    </div>
            </div>
        </div>
    </section>
</div>