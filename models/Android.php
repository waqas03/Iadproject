<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "android".
 *
 * @property string $Name
 * @property integer $Price
 * @property string $Description
 * @property double $Ratings
 * @property string $Status
 */
class Android extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'android';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Price', 'Description', 'Ratings', 'Status'], 'required'],
            [['Price'], 'integer'],
            [['Description', 'Status'], 'string'],
            [['Ratings'], 'number'],
            [['Name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'Price' => 'Price',
            'Description' => 'Description',
            'Ratings' => 'Ratings',
            'Status' => 'Status',
        ];
    }
}
