<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "trainee".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $trainnee_id
 * @property mixed $name
 * @property mixed $gender
 */
class Trainee extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['Training', 'trainee'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'trainnee_id',
            'name',
            'gender',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainnee_id', 'name', 'gender'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'trainnee_id' => 'Trainnee ID',
            'name' => 'Name',
            'gender' => 'Gender',
        ];
    }
}