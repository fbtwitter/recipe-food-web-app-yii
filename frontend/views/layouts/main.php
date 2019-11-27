<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\models\Users;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage(); 
    if (!Yii::$app->user->isGuest) {
        $users = Users::find()
        ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => Yii::$app->user->identity->username])
        ->one();
    }
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body id="page-top">
    <?php $this->beginBody() ?>
    <!-- Header -->
    <header id="header">
        <div class="navbar navbar-inverse navbar-fixed-top" role="banner" style="border-bottom: 2px solid aliceblue;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h1><a href="/site/index">PAWON <span style="color:#00aeef;">JAWA</span></a></h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="padding-top:10px;">
                        <li><a href="/site/all"><b>Resep</b></a></li>
                        <li class="dropdown"><a href="#"><b>Provinsi</b></a>
                            <ul role="menu" class="sub-menu">
                                <li><?= Html::a('Jawa Timur', ['/kategori-lokasi/index', 'lokasi' => 1]) ?></li>
                                <li><?= Html::a('Jawa Tengah', ['/kategori-lokasi/index', 'lokasi' => 2]) ?></li>
                                <li><?= Html::a('Jawa Barat', ['/kategori-lokasi/index', 'lokasi' => 3]) ?></li>
                                <li><?= Html::a('DKI Jakarta', ['/kategori-lokasi/index', 'lokasi' => 4]) ?></li>
                                <li><?= Html::a('Yogyakarta', ['/kategori-lokasi/index', 'lokasi' => 5]) ?></li>
                                <li><?= Html::a('Banten', ['/kategori-lokasi/index', 'lokasi' => 6]) ?></li>
                            </ul>
                        </li>
                        <!-- <li><a href="/bahan/index"><b>Bahan Masakan</b></a></li> -->
                        <li class="dropdown"><a href="#"><b>. . .</b></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="/site/about">About</a></li>
                                <li><a href="/site/contact">Contact</a></li>
                            </ul>
                        </li>
                        <?php 
                        if (Yii::$app->user->isGuest) {
                            echo '<li><a href="/site/signup"><b>Sign Up</b></a></li>';
                            echo '<li><a href="/site/login"><b>Sign In</b></a></li>';
                        } else {
                            echo '<li><a href="/chat/index"><b>Kirim Pesan</b></a></li>
                            <li class="dropdown user-profile"><a href="#"><img src="'.Yii::getAlias('@fileUrl').'/'. $users->USER_FOTO.'" alt="..."></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="/users/index">Profile</a></li>
                                <li><a href="/resep/tampil">Gallery</a></li>
                                <li><a href="/resep/create">Make Recipe</a></li>
                                <li>'.Html::a('Logout (' . Yii::$app->user->identity->username .')', ['/site/logout'], ['data' => ['confirm' => 'Are you sure you want to Logout ?',
                                'method' => 'post',],]).'<li>
                            </ul>
                            </li>';                      
                        }?>
                        <li class="search" style="padding-left:30px;">
                            <i class="fa fa-search"></i>
                            <div class="field-toggle" style="margin-top:-60px; margin-right:30px;">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
    <div class="wrap">
        <div class="container">
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                            E-mail: <a href="mailto:someone@example.com">rzaugusdi354@gmail.com</a> <br>
                            Phone: +62 823 1321 6454<br>
                            Fax: +62 823 1321 6454 <br>
                        </address>

                        <h2>Address</h2>
                        <address>
                            PENS, Jl Kampus ITS <br>
                            Sukolilo, <br>
                            Surabaya, Jawa Timur <br>
                            Indonesia<br>
                        </address>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required"
                                    placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                    placeholder="Your text here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
                        <p class="pull-right"><?= Yii::powered() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>