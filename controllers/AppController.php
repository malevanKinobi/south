<?php


namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\User;
class AppController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => [
                    'programs',
                    'test',
                    'article',
                    'dialogues',
                    'dialogue',
                    'account'
                ],
                'rules' => [
                    [
                        'allow' => false,
//                        'allow' => true,
//                        'actions' => ['index'],
                        'roles' => ['?'],
                        'denyCallback' => function($rule, $action) {
                            return $this->redirect(Url::to(['auth/login']));
                        }
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            /** @var User $user */
                            $user = Yii::$app->user->getIdentity();
                            return $user->isAdmin() || $user->isManager() ||  $user->isUser();
                        }
                    ],
                ],
            ],
        ];
    }
}