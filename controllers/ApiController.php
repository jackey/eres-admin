<?php
/**
 * Created by PhpStorm.
 * User: jackeychen
 * Date: 3/24/15
 * Time: 10:23 PM
 **/

namespace app\controllers;

use yii\web\Controller;

class ApiController extends Controller {

    public function actionBookform() {
//        \Yii::$app->mailer->compose('/mail/book')
//            ->setFrom('jackey@fumer.cn')
//            ->setTo('jackey@fumer.cn')
//            ->setSubject('好邮件')
//            ->send();

        $to = 'jackey@fumer.cn';
        $subject = '好邮件';
        $message = '好内容';

        mail($to, $subject, $message);
    }
}