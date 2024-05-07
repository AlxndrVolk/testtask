<?php

namespace app\models;

use Yii;
use yii\db\DataReader;
use yii\db\Exception;

final class Hawking
{
    /**
     * @throws Exception
     * @throws \Exception
     */
    public function __construct()
    {
        $this->bros();
        $this->brothers();
    }

    /**
     * @return void
     * @throws Exception
     */
    public function bros()
    {
        $query = Yii::$app->db->createCommand("CREATE TABLE IF NOT EXISTS test (
        id INT(11) NOT NULL AUTO_INCREMENT,
        script_name VARCHAR(25) NOT NULL,
        start_time INT(11) NOT NULL,
        end_time INT(11) NOT NULL,
        result ENUM('normal', 'illegal', 'failed', 'success') NOT NULL,
        PRIMARY KEY (id)
    )");

        $query->execute();
    }

    /**
     * @return void
     * @throws \Exception
     */
    private function brothers()
    {
        $results = ['normal', 'illegal', 'failed', 'success'];

        for ($i = 0; $i < 10; $i++) {
            $query = Yii::$app->db->createCommand('INSERT INTO test (script_name, start_time, end_time, result)
            VALUES (:script_name, :start_time, :end_time, :result)',
                [
                    ':script_name' => 'test_script_' . random_int(1, 100000),
                    ':start_time' => random_int(1000000000, 2000000000),
                    ':end_time' => random_int(1000000000, 2000000000) + random_int(2000, 4000),
                    ':result' => $results[array_rand($results)]
                ]);

            $query->execute();
        }
    }

    /**
     * @return array|DataReader
     * @throws Exception
     */
    private function production()
    {
        return Yii::$app->db->createCommand("SELECT * FROM test WHERE result IN ('normal', 'success')")->queryAll();
    }
}

