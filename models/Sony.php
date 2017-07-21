<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sony".
 *
 * @property string $Name
 * @property integer $Price
 * @property integer $Description
 * @property integer $Ratings
 * @property string $status
 */
class Sony extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sony';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Price', 'Description', 'Ratings', 'status'], 'required'],
            [['Price', 'Description', 'Ratings'], 'integer'],
            [['status'], 'string'],
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
            'status' => 'Status',
        ];
    }
}
