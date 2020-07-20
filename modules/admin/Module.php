<?php

namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use app\models\User;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['?'],
                        'denyCallback' => function($rule, $action) {
                         header('Location: '. Url::to(['/auth/login/']));
                        debug(true);
                        }
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            /** @var User $user */
                            $user = Yii::$app->user->getIdentity();
                            return $user->isAdmin();
                        }
                    ],
                    [
                        'controllers' => ['admin/news', 'admin/contact', 'admin/main',],
//                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            /** @var User $user */
                            $user = Yii::$app->user->getIdentity();
                            return $user->isManager();
                        }
                    ],
                ],
            ],
        ];
    }
}
