<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Likes;
use frontend\models\Review;
use frontend\models\Resep;
use frontend\models\KategoriLokasi;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KategoriLokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$namaLokasi = KategoriLokasi::find()
->where(['KATEGORI_LOKASI_ID' => $lokasi])
->one();
$this->title = 'Masakan ' . $namaLokasi->KATEGORI_LOKASI_NAMA;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-lokasi-index">

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo $namaLokasi->KATEGORI_LOKASI_NAMA;?></h1>
                            <p>Masakan khas <?php echo $namaLokasi->KATEGORI_LOKASI_NAMA;?>, enak di perut serasa kembali menjadi muda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                        <!-- <ul class="portfolio-filter text-center">
                            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".branded">Bandung</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".design">Bogor</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".folio">Cirebon</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".logos">Bekasi</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mobile">Tasikmalaya</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Banjar</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Sukabumi</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Cimahi</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Cianjur</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Cikarang</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Bekasi</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Purwakarta</a></li>
                            <li><a class="btn btn-default" href="#" data-filter=".mockup">Ciamis</a></li>
                        </ul> -->
                        <!--/#portfolio-filter-->

                        <div class="portfolio-items" style="padding-top:90px;">
                        <!-- start foreach -->
                        <?php 
                            foreach($model as $models) {
                        ?>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="<?= Yii::getAlias('@fileUrl').'/'. $models->RESEP_FOTO; ?>" class="img-responsive" alt="" style="width:261px;height:269px;">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><?= Html::a('<i class="fa fa-eye"></i>',['/resep/index', 'id' => $models->RESEP_ID]) ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="portfolio-info ">
                                        <div class="overflow" style="padding: 10px 20px 10px">
                                            <ul class="nav nav-justified post-nav">
                                                <li style="padding-right: 30px;">
                                                    <h2><?php echo $models->RESEP_JUDUL;?></h2>
                                                </li>
                                                <?php 
                                                    $jumReview = Review::find()
                                                    ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $models->RESEP_ID])
                                                    ->count();
                                            
                                                    $jumLike = Likes::find()
                                                    ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $models->RESEP_ID])
                                                    ->count();
                                                ?>
                                                <li><a href="#"><i class="fa fa-heart"></i><?php echo $jumLike;?></a></li>
                                                <li><a href="#"><i class="fa fa-comments"></i><?php echo $jumReview;?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                                <!-- end foreach -->
                            </div>
                        <?php }?>
                        </div>                        
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-4 padding-top">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Kategori Masakan</h3>
                            <ul class="nav navbar-stacked">
                            <?php 
                                $jumAllMasakan = Resep::find()
                                ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $lokasi])
                                ->count();
                                
                                if($currentKategori == ""){
                                    echo '<li class="active">'. Html::a('All <span class="pull-right"> ('. $jumAllMasakan . ')</span>', ['index', 'lokasi' => $lokasi]) . '</li>';
                                } else {
                                    echo '<li>'. Html::a('All <span class="pull-right"> ('. $jumAllMasakan . ')</span>', ['index', 'lokasi' => $lokasi]) . '</li>';
                                }
                            ?>
                            <?php 
                                foreach($kategori as $kategorimakanan) {
                                    $jumMasakan = Resep::find()
                                    ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $lokasi])
                                    ->andWhere('KATEGORI_MAKANAN_ID = :KATEGORI_MAKANAN_ID', [':KATEGORI_MAKANAN_ID' => $kategorimakanan->KATEGORI_MAKANAN_ID])
                                    ->count();

                                    if($currentKategori == $kategorimakanan->KATEGORI_MAKANAN_ID) {
                                        echo '<li class="active">'. Html::a($kategorimakanan->KATEGORI_MAKANAN . '<span class="pull-right">('. $jumMasakan . ')</span>', ['kategori', 'lokasi' => $lokasi, 'kategoriID' => $kategorimakanan->KATEGORI_MAKANAN_ID]) . '</li>';
                            ?>          
                            <?php 
                                    } else {
                                        echo '<li>'. Html::a($kategorimakanan->KATEGORI_MAKANAN . '<span class="pull-right"> ('. $jumMasakan . ')</span>', ['kategori', 'lokasi' => $lokasi, 'kategoriID' => $kategorimakanan->KATEGORI_MAKANAN_ID]) . '</li>';
                                    } 
                                }
                            ?>
                            </ul>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>Masakan Terbaru</h3>
                            <?php 
                                $resep = Resep::find()
                                ->where('RESEP_DATE >= CURDATE()')
                                ->orderBy(['RESEP_ID' => SORT_DESC])
                                ->limit(3)
                                ->All();
                                foreach($resep as $modelResep){
                            ?>
                            <div class="media">
                                <div class="pull-left">
                                <?php 
                                    echo '<li>'. Html::a('<img src="'. Yii::getAlias('@fileUrl').'/'.$modelResep->RESEP_FOTO .'" style="width:60px; height:60px;"', ['/resep/index', 'id' => $modelResep->RESEP_ID]) . '</li>';
                                ?>
                                </div>
                                <div class="media-body">
                                    <h4><a href="#"><?php echo $modelResep->RESEP_JUDUL;?></a></h4>
                                    <p>posted on <?php echo Yii::$app->formatter->asDate($modelResep->RESEP_DATE, 'medium');?></p>
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>