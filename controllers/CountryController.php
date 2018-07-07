<?php
/**
 * Created by PhpStorm.
 * User: MIT
 * Date: 28-Jun-18
 * Time: 1:49 PM
 */

namespace app\controllers;

use yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Countries;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Countries::find();

        $pagination = new Pagination([
            'defaultPageSize' => 30,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

       $sql ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='test' AND `TABLE_NAME`='countries'";
       $columnName = Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('country', [
            'countries' => $countries,
            'column_name' => $columnName,
            'pagination' => $pagination,
        ]);
    }

    public function actionCountryGrid()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Countries::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
    }


}