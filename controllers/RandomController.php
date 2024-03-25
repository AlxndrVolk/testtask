<?php

namespace app\controllers;

use app\models\Random;
use Exception;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

/**
 * Class RandomController
 * @package app\controllers
 */
class RandomController extends Controller
{
    /**
     * @return array|string[]
     * @throws Exception
     */
    public function actionGenerate()
    {
        $model = new Random();
        if ($model->generate()) {
            return [
                'id' => $model->id,
                'number' => $model->number
            ];
        }

        return ['error' => 'Не удалось сгенерировать число'];
    }

    /**
     * @param $id
     * @return array
     * @throws NotFoundHttpException
     */
    public function actionRetrieve($id)
    {
        $model = Random::retrieve($id);
        if ($model) {
            return [
                'id' => $model->id,
                'number' => $model->number
            ];
        } else {
            throw new NotFoundHttpException('Число не найдено');
        }
    }
}
