<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "samsung".
 *
 * @property string $Name
 * @property integer $Price
 * @property string $Description
 * @property double $Ratings
 * @property string $status
 */
class Samsung extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'samsung';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Price', 'Description', 'Ratings', 'status'], 'required'],
            [['Price'], 'integer'],
            [['Description', 'status'], 'string'],
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
            'status' => 'Status',
        ];
    }
}
