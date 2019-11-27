<?php
use frontend\models\RiwayatChat;
use frontend\models\Chat;
use common\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->


<html>
<head>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"> -->
<!-- <link href="../css/chat.css" rel="stylesheet"> -->

</head>
<body>
<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <!-- list siapa yang chat -->
          <?php $riwayatChat = RiwayatChat::find()
          ->where('RIWAYAT_PENGIRIM = :RIWAYAT_PENGIRIM', [':RIWAYAT_PENGIRIM' => Yii::$app->user->identity->username])
          ->All(); ?>
          <div class="inbox_chat">
          <?php if($riwayatChat != 0) { 
                foreach($riwayatChat as $chat) { 
                  if($jumChat == 0) {
                    $waktu = 0;
                    $isi = "";
                  } else {
                    foreach($isiChat as $chat2) { 
                      $waktu = $chat2->CHAT_WAKTU;
                      $isi = $chat2->CHAT_ISI;
                    }
                  }
                  if($chat->RIWAYAT_PENERIMA == $username) {?>
            <div class="chat_list active_chat">
                  <?php }else {?>
                    <div class="chat_list">
                  <?php }?>
              <div class="chat_people">
                <div class="chat_img"> <a href=""><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></a></div>
                <div class="chat_ib">
                  <h5><?php echo $chat->RIWAYAT_PENERIMA;?><span class="chat_date"><?php echo Yii::$app->formatter->asDate($waktu, 'medium');?></span></h5>
                  <p><?php echo $isi;?></p>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        </div>
        <!-- isi dari chat -->
        <div class="mesgs">
          <div class="msg_history">
          <?php 
              foreach($isiChat as $chat) { 
                if($chat->CHAT_PENGIRIM != Yii::$app->user->identity->username){ ?>
                  <div class="incoming_msg">
                    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="received_msg">
                      <div class="received_withd_msg">
                        <p><?php echo $chat->CHAT_ISI;?></p>
                        <span class="time_date"><?php echo Yii::$app->formatter->asTime($chat->CHAT_WAKTU, 'medium');?> | 
                            <?php echo Yii::$app->formatter->asDate($chat->CHAT_WAKTU, 'medium');?></span></div>
                    </div>
                  </div>
          <?php }else { ?>
                  <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p><?php echo $chat->CHAT_ISI;?></p>
                        <span class="time_date"><?php echo Yii::$app->formatter->asTime($chat->CHAT_WAKTU, 'medium');?> | 
                            <?php echo Yii::$app->formatter->asDate($chat->CHAT_WAKTU, 'medium');?></span> </div>
                    </div>
          <?php } 
          } ?>
          </div>  
          <div class="type_msg">
            <div class="input_msg_write">
              <!-- <input type="text" class="write_msg" placeholder="Type a message" /> -->
              <?php $form = ActiveForm::begin(); ?>
              
              <?= $form->field($model, 'CHAT_ISI')->textInput(['placeholder' => "Type a message"]) ?>
              <div class="form-group">
                  <?= Html::submitButton('<i class="fa fa-paper-plane-o" aria-hidden="true"></i>', ['class' => 'btn btn-success']) ?>
              </div>  
              <?php ActiveForm::end(); ?>
              <!-- <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> -->
            </div>
          </div>
        </div>
      </div>
      
      
      <p class="text-center top_spac"> Made with love <a target="_blank" href="#">Pawon Jawa</a></p>
      
    </div></div>
    </body>
    </html>