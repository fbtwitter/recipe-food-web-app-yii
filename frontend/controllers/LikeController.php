<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Resep;
use frontend\models\Likes;
use frontend\models\LikesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LikeController implements the CRUD actions for Likes model.
 */
class LikeController extends Controller
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
     * Lists all Likes models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $likes = new Likes();

        $model = Resep::find()
        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $id])
        ->one();

        $check = Likes::find()
        ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => Yii::$app->user->identity->username])
        ->andWhere('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
        ->count();

        if($check == 0) {
            $idLikes = Likes::find()->orderBy([['LIKE_ID' => SORT_ASC]])->max('LIKE_ID') + 1;

            $likes->LIKE_ID = $idLikes;
            $likes->USER_USERNAME = Yii::$app->user->identity->username;
            $likes->RESEP_ID = $model->RESEP_ID;
            $likes->LIKE_JUMLAH = 1;
            $likes->save();
        } else {
            $likesdelete = Likes::find()
            ->where('USER_USERNAME = :USER_USERNAME', [':USER_USERNAME' => Yii::$app->user->identity->username])
            ->andWhere('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $model->RESEP_ID])
            ->one();
            $this->findModel($likesdelete->LIKE_ID)->delete();
        }

        return Yii::$app->response->redirect(['/resep/index' , 'id' => $id]);
    }

    /**
     * Displays a single Likes model.
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
     * Creates a new Likes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Likes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->LIKE_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Likes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->LIKE_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Likes model.
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
     * Finds the Likes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Likes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Likes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
