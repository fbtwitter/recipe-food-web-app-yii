<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Users;


         $users = Users::find()
        ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => Yii::$app->user->identity->username])
        ->one();

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

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

    <div class="container bootstrap snippet">
    <div class="row">
          <div class="col-sm-10"></div>
          <div class="col-sm-2"><?= Html::a('Edit Profile', ['update', 'id' => Yii::$app->user->identity->username], ['class' => 'btn btn-primary pull-right']) ?></div>
          
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?= Yii::getAlias('@fileUrl').'/'. $users->USER_FOTO ?>" class="avatar img-circle img-thumbnail" alt="avatar">
        
      </div></hr><br>
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
          </ul> 
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <!-- <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul> -->

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">     
                          <div class="col-xs-12">
                              <label for="first_name"><h4>Full Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="input your first name" title="enter your first name if any." value="<?php echo $users->USER_NAMA_LENGKAP;?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-12" style="margin-top:10px;">
                              <label for="phone"><h4>Username</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="input your username" title="enter your phone number if any." value="<?php echo $users->USER_USERNAME;?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-12" style="margin-top:10px; padding-bottom:40px;">
                             <label for="mobile"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="input your email" title="enter your mobile number if any." value="<?php echo $users->USER_EMAIL;?>">
                          </div>
                      </div>
              	</form>
              
              <hr>          
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>


</div>
