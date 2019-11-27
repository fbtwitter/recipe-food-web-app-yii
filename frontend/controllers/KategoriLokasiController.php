<?php

namespace frontend\controllers;

use Yii;
use frontend\models\KategoriLokasi;
use frontend\models\KategoriLokasiSearch;
use frontend\models\Resep;
use frontend\models\KategoriMakanan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KategoriLokasiController implements the CRUD actions for KategoriLokasi model.
 */
class KategoriLokasiController extends Controller
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
     * Lists all KategoriLokasi models.
     * @return mixed
     */
    public function actionIndex($lokasi)
    {
        $query = Resep::find()
        ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $lokasi]);

        $pages = new \yii\data\Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 9
        ]);
        $model = $query->offset($pages->offset)
        ->limit($pages->limit)->all();

        $kategori = KategoriMakanan::find()
        ->All();

        $currentKategori = "";

        return $this->render('index', [
            'model' => $model,
            'pages' => $pages,
            'lokasi' => $lokasi,
            'kategori' => $kategori,
            'currentKategori' => $currentKategori,
        ]);
    }

    public function actionKategori($lokasi, $kategoriID) {
        $model = Resep::find()
        ->where('KATEGORI_LOKASI_ID = :KATEGORI_LOKASI_ID', [':KATEGORI_LOKASI_ID' => $lokasi])
        ->andWhere('KATEGORI_MAKANAN_ID = :KATEGORI_MAKANAN_ID', [':KATEGORI_MAKANAN_ID' => $kategoriID])
        ->All();

        $kategori = KategoriMakanan::find()
        ->All();

        $currentKategori = $kategoriID;

        return $this->render('index', [
            'model' => $model,
            'lokasi' => $lokasi,
            'kategori' => $kategori,
            'currentKategori' => $currentKategori,
        ]);
    }

    /**
     * Displays a single KategoriLokasi model.
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
     * Creates a new KategoriLokasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KategoriLokasi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->KATEGORI_LOKASI_ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KategoriLokasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->KATEGORI_LOKASI_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KategoriLokasi model.
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
     * Finds the KategoriLokasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return KategoriLokasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KategoriLokasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
