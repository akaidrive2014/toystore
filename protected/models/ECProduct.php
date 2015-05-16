<?php

/**
 * This is the model class for table "ec_products".
 *
 * The followings are the available columns in table 'ec_products':
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_sku
 * @property integer $is_active
 * @property string $short_description
 * @property string $price
 * @property string $special_price
 * @property string $categories
 * @property integer $stock
 * @property string $product_images
 */
class ECProduct extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ec_products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price, categories, product_images', 'required'),
			array('is_active, stock', 'numerical', 'integerOnly'=>true),
			array('product_name, categories', 'length', 'max'=>500),
			array('product_sku', 'length', 'max'=>100),
			array('price, special_price', 'length', 'max'=>10),
			array('short_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, product_name, product_sku, is_active, short_description, price, special_price, categories, stock, product_images', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'product_name' => 'Product Name',
			'product_sku' => 'Product Sku',
			'is_active' => 'Is Active',
			'short_description' => 'Short Description',
			'price' => 'Price',
			'special_price' => 'Special Price',
			'categories' => 'Categories',
			'stock' => 'Stock',
			'product_images' => 'Product Images',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_sku',$this->product_sku,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('special_price',$this->special_price,true);
		$criteria->compare('categories',$this->categories,true);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('product_images',$this->product_images,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ECProduct the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
