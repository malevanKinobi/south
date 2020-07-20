<?php


namespace app\controllers;
use app\models\Calories;
use app\models\Coach;
use app\models\Contact;
use app\models\Dialogue;
use app\models\News;
use app\models\Programs;
use app\models\UserData;
use Yii;
use yii\data\Pagination;


class HomeController extends AppController
{

    public function actionIndex()
    {

        $query = News::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('index', compact('name', 'news', 'models', 'pages'));
    }

    public function actionAbout()
    {
        $dataCoach = Coach::getCurrentCoach();
        $coaches = Coach::getAllRecord();
        return $this->render('about', compact('coaches', 'dataCoach'));
    }

    public function actionSet($id = null)
    {
        if (Yii::$app->request->get('id'))
        {
            $model = UserData::findOne(['user_id' => Yii::$app->user->getId()]);
            $model->coach_sub_id = $id;
            $model->save();
        }
        return $this->redirect(['home/about']);
    }

    public function actionUnset()
    {
            $model = UserData::findOne(['user_id' => Yii::$app->user->getId()]);
            $model->coach_sub_id = '';
            $model->save();

            $dialogue = Dialogue::find()->where(['user_id' => Yii::$app->user->getId()])->one();
            if (!empty($dialogue))
            {
                $dialogue->delete();
            }

        return $this->redirect(['home/about']);
    }

    public function actionPrograms()
    {
        $programs = Programs::getUserPrograms();
        return $this->render('programs', compact('programs'));
    }

    public function actionAccount()
    {
        $userData = UserData::getDataUser();
        $coach = Coach::getCurrentCoach();
        $model = new Calories();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $result = $model->getResult();
            return $this->render('account', compact('model','result', 'userData', 'coach'));
        }
        return $this->render('account',compact('userData', 'model', 'coach'));
    }

    public function actionArticle($id = null)
    {
        $article = News::getOneNews($id);
        return $this->render('article', compact('article'));
    }

    public function actionDownload($id = null)
    {
        return Programs::getDownloadProgram($id);

    }

    public function actionContact()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            $model = new Contact();

            return $this->render('contact', compact('model'));
        }
        return $this->render('contact', compact('model'));
    }



}