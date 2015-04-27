<?php

/**
 * This is the model class for table "ec_categories".
 *
 * The followings are the available columns in table 'ec_categories':
 * @property integer $category_id
 * @property string $category_name
 * @property integer $is_active
 * @property string $category_description
 * @property string $category_image
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $friendly_url
 */
class ECCategory extends CActiveRecord
{
	public $status = array(
		0=>'Disabled',
		1=>'Enabled',
	);
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ec_categories';
	}
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_name', 'required'),
			array('is_active,discount_amount', 'numerical', 'integerOnly'=>true),
			array('discount_amount','length','min'=>1,'max'=>2),
			array('category_name', 'length', 'max'=>100),
			array('seo_title', 'length', 'max'=>500),
			array('seo_keywords, friendly_url', 'length', 'max'=>5000),
			array('category_description, category_image, seo_description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('category_id, category_name, is_active, category_description, category_image, seo_title, seo_description, seo_keywords, friendly_url', 'safe', 'on'=>'search'),
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
	
	public function beforeSave(){
		if(parent::beforeSave()){
			$this->friendly_url = Website::slug($this->category_name);
			if(!empty($this->friendly_url)){
				$this->friendly_url = Website::slug($this->friendly_url);
			}
			return true;
		}
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'category_id' => 'ID',
			'category_name' => 'Category Name',
			'is_active' => 'Is Active',
			'category_description' => 'Category Description',
			'category_image' => 'Category Image',
			'seo_title' => 'Seo Title',
			'seo_description' => 'Seo Description',
			'seo_keywords' => 'Seo Keywords',
			'friendly_url' => 'Friendly Url',
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

		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('category_description',$this->category_description,true);
		$criteria->compare('category_image',$this->category_image,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_description',$this->seo_description,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('friendly_url',$this->friendly_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ECCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
