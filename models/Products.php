<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $product_id
 * @property integer $cat_id
 * @property integer $brand_id
 * @property string $date
 * @property string $product_title
 * @property string $product_img
 * @property integer $product_price
 * @property string $product_desc
 * @property string $status
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'brand_id', 'product_title', 'product_img', 'product_price', 'product_desc', 'status'], 'required'],
            [['cat_id', 'brand_id', 'product_price'], 'integer'],
            [['date'], 'safe'],
            [['product_title', 'product_img', 'product_desc', 'status'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'date' => 'Date',
            'product_title' => 'Product Title',
            'product_img' => 'Product Img',
            'product_price' => 'Product Price',
            'product_desc' => 'Product Desc',
            'status' => 'Status',
        ];
    }
}
