<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nokia".
 *
 * @property string $Name
 * @property integer $Price
 * @property string $Description
 * @property integer $Ratings
 * @property string $status
 */
class Nokia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nokia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Price', 'Description', 'Ratings', 'status'], 'required'],
            [['Price', 'Ratings'], 'integer'],
            [['Description'], 'string'],
            [['Name'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 10],
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
