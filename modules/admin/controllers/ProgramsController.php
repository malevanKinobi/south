<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Programs;
use yii\data\ActiveDataProvider;
use app\modules\admin\controllers\AppAdminController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProgramsController implements the CRUD actions for Programs model.
 */
class ProgramsController extends AppAdminController
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
     * Lists all Programs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Programs::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionReplacement()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Programs::find()->where(['<=', 'date', date('Y-m-d') ]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Programs model.
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
     * Creates a new Programs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Programs();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->upload = UploadedFile::getInstance($model, 'file_name');
            if ($name = $model->uploadFile()) { // если изображение было загружено
                // сохраняем в БД имя файла изображения
                $model->file_name = $name;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Programs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $old = $model->file_name;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->upload = UploadedFile::getInstance($model, 'file_name');
            if ($new = $model->uploadFile()) { // если изображение было загружено
                // удаляем старое изображение

                // сохраняем в БД новое имя
                $model->file_name = $new;
            } else { // оставляем старое изображение
                $model->file_name = $old;
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Programs model.
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
     * Finds the Programs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Programs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Programs::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
