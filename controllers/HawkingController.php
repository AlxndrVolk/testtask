<?php

namespace app\controllers;

use app\models\Hawking;
use yii\db\Exception;
use yii\web\Controller;

class HawkingController extends Controller
{
    /**
     * @return string
     * @throws Exception
     */
    public function actionIndex()
    {
        $hawking = new Hawking();
        $hawk = $hawking->production();

        return $this->render('index', [
            'data' => $hawk,
        ]);
    }
}
