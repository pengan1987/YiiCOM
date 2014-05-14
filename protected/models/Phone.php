<?php

/**
 * This is the model class for table "phone".
 *
 * The followings are the available columns in table 'phone':
 * @property string $brand
 * @property string $model
 * @property integer $price
 * @property string $phonelock
 * @property string $looks
 * @property string $colour
 * @property integer $id
 * @property string $serialnumb
 * @property string $pic
 * @property string $avaliablity
 * @property string $type
 * @property string $storage
 */
class Phone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('brand, model, price, phonelock, looks, colour, serialnumb, pic, avaliablity, type, storage', 'required'),
			array('price', 'numerical', 'integerOnly'=>true),
			array('brand, model, phonelock, looks, colour, serialnumb, avaliablity, type, storage', 'length', 'max'=>30),
			array('pic', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('brand, model, price, phonelock, looks, colour, id, serialnumb, pic, avaliablity, type, storage', 'safe', 'on'=>'search'),
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
			'brand' => 'Brand',
			'model' => 'Model',
			'price' => 'Price',
			'phonelock' => 'Phonelock',
			'looks' => 'Looks',
			'colour' => 'Colour',
			'id' => 'ID',
			'serialnumb' => 'Serialnumb',
			'pic' => 'Pic',
			'avaliablity' => 'Avaliablity',
			'type' => 'Type',
			'storage' => 'Storage',
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

		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('phonelock',$this->phonelock,true);
		$criteria->compare('looks',$this->looks,true);
		$criteria->compare('colour',$this->colour,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('serialnumb',$this->serialnumb,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('avaliablity',$this->avaliablity,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('storage',$this->storage,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Phone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
