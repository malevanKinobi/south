<?php

namespace app\controllers;
use app\models\LoginForm;
use app\models\UserData;
use Yii;
use yii\helpers\Url;


class AuthController extends AppController
{

    public $layout = 'auth';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $checkUser = UserData::find()->where(['user_id' => Yii::$app->user->getId()])->one();
            if (Yii::$app->user->getIdentity()->isAdmin() || Yii::$app->user->getIdentity()->isManager()){
                if (Yii::$app->user->identity->isAdmin() || Yii::$app->user->identity->isManager())
                {
                    return $this->redirect(Url::to(['admin/main/index']));
                }
                exit();
            }
            elseif (empty($checkUser))
            {
                $activeUser = new UserData();
                $activeUser->user_id = Yii::$app->user->getId();
                $activeUser->save();
            }

                return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        session_start();
        unset($_SESSION['dialog_id'], $_SESSION['id']);
        Yii::$app->user->logout();

        return $this->goHome();
    }

}