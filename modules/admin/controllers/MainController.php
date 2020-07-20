<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\DataU;
use app\modules\admin\models\News;
use app\modules\admin\models\User;

class MainController extends AppAdminController
{

    public function actionIndex()
    {
        $countUser = User::find()->count();
        $countAdmin = User::find()->where(['role' => 10])->asArray()->count();
        $countNews = News::find()->count();
        return $this->render('index',
            compact('countNews', 'countAdmin', 'countUser'));
    }
}