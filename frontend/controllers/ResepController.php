<?php

namespace frontend\controllers;

use Yii;
use backend\models\Resep;
use frontend\models\ResepSearch;
use frontend\models\Review;
use backend\models\Bahan;
use backend\models\Langkah;
use backend\models\Model;
use backend\models\KategoriLokasi;
use backend\models\KategoriMakanan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * ResepController implements the CRUD actions for Resep model.
 */
class ResepController extends Controller
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
     * Lists all Resep models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $model = $this->findModel($id);
        $modelReview = new Review();

        $countReview = Review::find()
        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $id])
        ->count();

        $review = Review::find()
        ->where('RESEP_ID = :RESEP_ID', [':RESEP_ID' => $id])
        ->all();

        if ($modelReview->load(Yii::$app->request->post())) {
            $idReview = Review::find()->orderBy([['REVIEW_ID' => SORT_ASC]])->max('REVIEW_ID') + 1;
            $modelReview->REVIEW_ID = $idReview;
            $modelReview->RESEP_ID = $id;
            $modelReview->REVIEW_USERNAME = Yii::$app->user->identity->username;
            $modelReview->save();

            return Yii::$app->response->redirect(['/resep/index' , 'id' => $id]);
        }

        $resep = Resep::find()
        ->where('KATEGORI_MAKANAN_ID = :KATEGORI_MAKANAN_ID', [':KATEGORI_MAKANAN_ID' => $model->KATEGORI_MAKANAN_ID])
        ->limit(4)
        ->orderBy(['RESEP_ID' => SORT_DESC])
        ->all();


        return $this->render('index', [
            'model' => $model,
            'modelReview' => $modelReview,
            'review' => $review,
            'countReview' => $countReview,
            'resep' => $resep,
        ]);
    }

    public function actionTampil() 
    {
        $searchModel = new ResepSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['USER_USERNAME' => Yii::$app->user->identity->username]);

        return $this->render('tampil', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Resep model.
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
     * Creates a new Resep model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Resep();
        $modelsBahan = [new Bahan];
        $modelsLangkah = [new Langkah];

        //dropdown list untuk form
        $dropdownLokasi = KategoriLokasi::find()->all(); 
        $dropdownLokasi= ArrayHelper::map($dropdownLokasi,'KATEGORI_LOKASI_ID','KATEGORI_LOKASI_NAMA');
        $dropdownMakanan = KategoriMakanan::find()->all(); 
        $dropdownMakanan= ArrayHelper::map($dropdownMakanan,'KATEGORI_MAKANAN_ID','KATEGORI_MAKANAN');

        if ($model->load(Yii::$app->request->post())) {
            //save id
            $idResep = Resep::find()->orderBy([['RESEP_ID' => SORT_ASC]])->max('RESEP_ID') + 1;
            $model->RESEP_ID = $idResep;
            // $model->USER_USERNAME = Yii::$app->user->identity->username;
           
            //save picture
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->file->saveAs(Yii::getAlias('@filePath'). '/'. $model->file->baseName . '.' .$model->file->extension);
            $model->RESEP_FOTO = $model->file->baseName. '.' .$model->file->extension;
            $model->save();  

            $modelsBahan = Model::createMultiple(Bahan::classname());
            Model::loadMultiple($modelsBahan, Yii::$app->request->post());

            $modelsLangkah = Model::createMultiple(Langkah::classname());
            Model::loadMultiple($modelsLangkah, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsBahan) && $valid;
            $valid1 = Model::validateMultiple($modelsLangkah) && $valid;
            
            if ($valid && $valid1) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsBahan as $modelBahan) 
                        {
                            $modelBahan->RESEP_ID = $model->RESEP_ID;
                            if (! ($flag = $modelBahan->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($modelsLangkah as $modelLangkah) 
                        {
                            $modelLangkah->RESEP_ID = $model->RESEP_ID;
                            if (! ($flag = $modelLangkah->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['/resep/view', 'id' => $model->RESEP_ID]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
            return $this->redirect(['view', 'id' => $model->RESEP_ID]);
        }

        return $this->render('create', [
            'model' => $model,
            'modelsBahan' => (empty($modelsBahan)) ? [new Bahan] : $modelsBahan,
            'modelsLangkah' => (empty($modelsLangkah)) ? [new Langkah] : $modelsLangkah,
            'dropdownLokasi' => $dropdownLokasi,
            'dropdownMakanan' => $dropdownMakanan,
        ]);
    }

    /**
     * Updates an existing Resep model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->RESEP_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Resep model.
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
     * Finds the Resep model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Resep the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Resep::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
