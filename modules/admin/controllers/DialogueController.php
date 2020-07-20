<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Coach;
use app\modules\admin\models\DataU;
use app\modules\admin\models\Dialogue;
use app\modules\admin\models\Message;
use Yii;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

class DialogueController extends AppAdminController
{
    public function actionDialogues()
    {
        $dialogues = Dialogue::findDialogue();
        $dialogues_id =  \yii\helpers\ArrayHelper::getColumn($dialogues, 'user_id');
        $users = DataU::find()->where(['user_id' => $dialogues_id])->asArray()->all();
        return $this->render('dialogues', compact('users'));
    }



    public function actionDialogue($id = null)
    {
        session_start();
        $dialogue = Dialogue::find()->where([
            'and',
            ['coach_id' => \Yii::$app->user->getId()],
            ['user_id' => $id]
        ])->asArray()->one();
        $_SESSION['dialog_id'] = $dialogue['id'];
        $_SESSION['user_id'] = $id;
        $model = new Message();

        if ($model->load(\Yii::$app->request->post()))
        {
            if (\Yii::$app->request->isPjax)
            {
                date_default_timezone_set('Asia/Novosibirsk');
                $model->sender_id = \Yii::$app->user->getId();
                $model->date = date("Y-m-d H:i:s");
                $model->dialogue_id = $dialogue['id'];
                $model->save();
                $model = new Message();
                return $this->render('dialogue', compact('model'));
            }

        }

        return $this->render('dialogue',compact('model'));
    }




    public function actionTest()
    {
        session_start();
        $messages = Message::find()->where(['dialogue_id' => $_SESSION['dialog_id']])->asArray()->all();
        $coach = Coach::find()->where(['id_e' => Yii::$app->user->getId()])->asArray()->one();
        $user = DataU::find()->where(['and', ['user_id' => $_SESSION['user_id'], 'coach_sub_id' => Yii::$app->user->getId()]])->asArray()->one();
        if (empty($messages))
        {
            return "Сообщений нет...";
        }
        ob_start();
            foreach ($messages as $message) {
                if ($message['sender_id'] == Yii::$app->user->getId()) {
                    echo "<div class=\"row justify-content-end\">";
                    echo "<div class=\"col-lg-10\">";
                    echo "<div class=\"media justify-content-end\">";
                    echo " <div class=\"media-body\">";
                    echo "<h5 class=\"mt-0\">" . $coach['name'] ."</h5>";
                    echo "<p>";
                    echo $message['message'];
                    echo "</p>";
                    echo "<p><small class=\"text-muted\">Дата отправки сообщения | " . $message['date'] . "</small></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                else
                {
                    echo "<div class=\"row justify-content-center\">";
                    echo "<div class=\"col-lg-8\">";
                    echo "<div class=\"media\">";
                    echo " <div class=\"media-body\">";
                    echo "<h5 class=\"mt-0\">" . $user['name'] . "</h5>";
                    echo "<p>" ;
                    echo $message['message'];
                    echo "</p>";
                    echo "<p><small class=\"text-muted\">Дата отправки сообщения |" . $message['date'] . "</small></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }

        $content = ob_get_contents();
        ob_get_clean();
//        session_start();
//        unset($_SESSION['dialog_id'], $_SESSION['user_id']);
//        session_destroy();
        return $content;
    }
}