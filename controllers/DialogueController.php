<?php


namespace app\controllers;


use app\models\Coach;
use app\models\Dialogue;
use app\models\Message;
use Codeception\Lib\Di;
use Yii;

class DialogueController extends AppController
{
    public function actionDialogues()
    {
        $coach_id = Coach::getCurrentCoach();
        if (empty(Dialogue::findDialogue()))
        {
            $model = new Dialogue();
            $model->user_id = \Yii::$app->user->getId();
            $model->coach_id = $coach_id['id_e'];
            $model->save();
        }
        $coach = Coach::getCurrentCoach();
        return $this->render('dialogues', compact('coach'));
    }

    public function actionDialogue($id = null)
    {
        $model = new Message();
        $dialog_id = Dialogue::findDialogue();
        $messages = Message::getMessage();
        if ($model->load(\Yii::$app->request->post()))
        {
            if (\Yii::$app->request->isPjax)
            {
                date_default_timezone_set('Asia/Novosibirsk');
                $model->sender_id = \Yii::$app->user->getId();
                $model->date = date("Y-m-d H:i:s");
                $model->dialogue_id = $dialog_id['id'];
                $model->save();
                $model = new Message();
                return $this->render('dialogue', compact('model', 'messages'));
            }

        }
        return $this->render('dialogue', compact('model', 'messages'));
    }

    public function actionTest()
    {
        $messages = Message::getMessage();
        $user = \app\models\UserData::getDataUser();
        $coach = \app\models\Coach::getCurrentCoach();
        $last_id = \app\models\Message::find()->orderBy(['id' => SORT_DESC])->one();
        ob_start();
        echo "<div class=\"container mt-5 mb-5 anyClass\" style=\"border: 5px solid #F5F5F5\">";
        if (empty($messages))
        {
            return "Сообщений нет...";
        }
        foreach ($messages as $message) {
            if ($message['sender_id'] == Yii::$app->user->getId()) {
                echo "<div class=\"row justify-content-lg-end mt-4 mb-4\""?>
                <?php if ($message['id'] == $last_id['id']) {echo "id='anchor' >";} else {echo '>';}
                echo " <div class=\"col-lg-8\">";
                echo "<div class=\"media\" style=\"border-bottom: 5px solid #F5F5F5; border-top: 5px solid #F5F5F5;\">";
                echo "<div class=\"media-body\">";
                echo "<h5 class=\"mt-0\">" . $user['name'] . "</h5>";
                echo $message['message'];
                echo "<p><small class=\"text-muted\">Дата отправки сообщения |" . $message['date'] . "</small></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            elseif ($message['sender_id'] == $coach['id_e'])
            {
                echo "<div class=\"row justify-content-lg-start mt-4 mb-4\""?>
                <?php if ($message['id'] == $last_id['id']) {echo "id='anchor' >";} else {echo '>';}
                echo " <div class=\"col-lg-8\">";
                echo "<div class=\"media\" style=\"border-bottom: 5px solid #F5F5F5; border-top: 5px solid #F5F5F5;\">";
                echo "<img src=\"/images/coaches/" . $coach['photo'] . "\" width=\"50\" height=\"50\" class=\"mr-3 mt-1\" alt=\"...\">";
                echo "<div class=\"media-body\">";
                echo "<h5 class=\"mt-0\">" . $coach['name'] . "</h5>";
                echo $message['message'];
                echo "<p><small class=\"text-muted\">Дата отправки сообщения |" . $message['date'] . "</small></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        echo "</div>";
        $content = ob_get_contents();
        ob_end_clean();
        return $content;

    }
}