<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Chat;
use frontend\models\ChatSearch;
use frontend\models\RiwayatChat;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChatController implements the CRUD actions for Chat model.
 */
class ChatController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Chat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Chat();

        $jumRiwayatChat = RiwayatChat::find()
        ->where('RIWAYAT_PENGIRIM = :RIWAYAT_PENGIRIM', [':RIWAYAT_PENGIRIM' => Yii::$app->user->identity->username])
        ->orWhere('RIWAYAT_PENERIMA = :RIWAYAT_PENERIMA', [':RIWAYAT_PENERIMA' => Yii::$app->user->identity->username])
        ->count();

        $riwayatChat = RiwayatChat::find()
        ->where('RIWAYAT_PENGIRIM = :RIWAYAT_PENGIRIM', [':RIWAYAT_PENGIRIM' => Yii::$app->user->identity->username])
        ->All();

        if ($model->load(Yii::$app->request->post())) {
            $model->chat_pengirim = Yii::$app->user->identity->id;
            $model->chat_penerima = 2;
            $model->chat_waktu = date('Y-d-m h:i:s');
            $model->save();
            $model = new Chat();
        }

        return $this->render('index', [
            'model' => $model,
            'jumRiwayatChat' => $jumRiwayatChat,
            'riwayatChat' => $riwayatChat,
        ]);
    }

    public function actionAdd($username) {
        $jumRiwayatChat = RiwayatChat::find()
        ->where(['RIWAYAT_PENGIRIM' => [Yii::$app->user->identity->username, $username]])
        ->andWhere(['RIWAYAT_PENERIMA' => [Yii::$app->user->identity->username, $username]])
        ->count();

        if($jumRiwayatChat == 0) {
            $model = new RiwayatChat();
            $idRiwayatChat = RiwayatChat::find()->orderBy([['RIWAYAT_ID' => SORT_ASC]])->max('RIWAYAT_ID') + 1;
            $model->RIWAYAT_ID = $idRiwayatChat;
            $model->RIWAYAT_PENGIRIM = Yii::$app->user->identity->username;
            $model->RIWAYAT_PENERIMA = $username;
            $model->save();

            $model = new RiwayatChat();
            $idRiwayatChat = RiwayatChat::find()->orderBy([['RIWAYAT_ID' => SORT_ASC]])->max('RIWAYAT_ID') + 1;
            $model->RIWAYAT_ID = $idRiwayatChat;
            $model->RIWAYAT_PENGIRIM = $username;
            $model->RIWAYAT_PENERIMA = Yii::$app->user->identity->username;
            $model->save();
        }

        return Yii::$app->response->redirect(['/chat/chat' , 'username' => $username]);
    }

    public function actionChat($username) {
        $model = new Chat();

        $jumChat = Chat::find()
        ->where(['chat_pengirim' => [Yii::$app->user->identity->username, $username]])
        ->andWhere(['chat_penerima' => [Yii::$app->user->identity->username, $username]])
        ->count();

        $chat = Chat::find()
        ->where(['chat_pengirim' => [Yii::$app->user->identity->username, $username]])
        ->andWhere(['chat_penerima' => [Yii::$app->user->identity->username, $username]])
        ->All();

        if ($model->load(Yii::$app->request->post())) {
            $idChat = Chat::find()->orderBy([['CHAT_ID' => SORT_ASC]])->max('CHAT_ID') + 1;
            $model->CHAT_ID = $idChat;

            $model->CHAT_PENGIRIM = Yii::$app->user->identity->username;
            $model->CHAT_PENERIMA = $username;
            $model->save();
            $model = new Chat();
        }

        return $this->render('chat', [
            'model' => $model,
            'isiChat' => $chat,
            'jumChat' => $jumChat,
            'username' => $username,
        ]);
    }

    /**
     * Displays a single Chat model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Chat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CHAT_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Chat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CHAT_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Chat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
