<?php
use frontend\models\RiwayatChat;
use frontend\models\Chat;
use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Messaging';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->


<html>
<head>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="../css/chat.css" rel="stylesheet"> -->
</head>
<body>
<div class="container">
  <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1><?= Html::encode($this->title) ?></h1
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<div class="messaging" style="padding-top:40px;">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch" style="padding-top:20px;padding-bottom:20px;">
            <div class="recent_heading">
              <h4>Recent Chat</h4>
            </div>
            <!-- <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text"class="search-bar"placeholder="Search">
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div> -->
          </div>
          <!-- list siapa yang chat -->
          <div class="inbox_chat">
          <?php 
              if($jumRiwayatChat > 0) { 
                foreach($riwayatChat as $chat) {
                  $jumChat = Chat::find()
                  ->where(['chat_pengirim' => [Yii::$app->user->identity->username, $chat->RIWAYAT_PENERIMA]])
                  ->andWhere(['chat_penerima' => [Yii::$app->user->identity->username, $chat->RIWAYAT_PENERIMA]])
                  ->count();

                  if($jumChat > 0) {
                    $isiChat = Chat::find()
                    ->where(['chat_pengirim' => [Yii::$app->user->identity->username, $chat->RIWAYAT_PENERIMA]])
                    ->andWhere(['chat_penerima' => [Yii::$app->user->identity->username, $chat->RIWAYAT_PENERIMA]])
                    ->All();
                    foreach($isiChat as $chats) {
                      $penerima = $chats->CHAT_PENERIMA;
                      $waktu = $chats->CHAT_WAKTU;
                      $isi = $chats->CHAT_ISI;
                    }
                  } else {
                      $penerima = "";
                      $waktu = 0;
                      $isi = "";
                  }
          ?>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"><?= Html::a('<img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">', ['/chat/chat', 'username' => $chat->RIWAYAT_PENERIMA]) ?></div>
                <div class="chat_ib">                
                  <h5><?php echo $penerima;?><span class="chat_date"><?php echo Yii::$app->formatter->asDate($waktu, 'medium');?></span></h5>
                  <p><?php echo $isi;?></p>
                </div>
              </div>
            </div>
            <?php } } else { ?>
              <div class="chat_list">
              <div class="chat_people">
              <h5>No data found</h5>
                <!-- <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div> -->
              </div>
            </div>
            <?php } ?>
          </div>
          
        </div>
      </div>
       
    </div></div>
    </body>
    </html>