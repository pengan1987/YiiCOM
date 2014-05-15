<?php

/**
 * This is the model class for table "gcom".
 *
 * The followings are the available columns in table 'gcom':
 * @property string $brand
 * @property string $customername
 * @property string $customercell
 * @property string $avaliablility
 * @property string $year
 * @property string $type
 * @property string $model
 * @property string $serialnumb
 * @property string $cpu
 * @property string $cpumodel
 * @property string $cpuspeed
 * @property string $gcard
 * @property string $gcardmodel
 * @property string $ram
 * @property string $HardDrive
 * @property string $HDType
 * @property string $size
 * @property string $usbtype
 * @property string $usbN
 * @property string $DisplayOutput
 * @property string $DVDdrive
 * @property string $webcam
 * @property string $wifi
 * @property string $lan
 * @property string $OS
 * @property string $OSversion
 * @property string $SystemType
 * @property string $Pic
 * @property integer $Id
 * @property string $ebay
 * @property integer $sellingprice
 * @property string $soldprice
 * @property string $SbaskedforID
 * @property string $SBasked
 * @property string $cpucores
 * @property string $onsale
 * @property integer $secprice
 */
class Computer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gcom';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('brand, customername, customercell, avaliablility, type, model, serialnumb, cpu, cpumodel, cpuspeed, ram, HardDrive, HDType, size, usbtype, usbN, DVDdrive, webcam, wifi, lan, OS, OSversion, SystemType, ebay, soldprice, SbaskedforID, SBasked, onsale, secprice', 'required'),
			array('sellingprice, secprice', 'numerical', 'integerOnly'=>true),
			array('brand, cpumodel, usbtype', 'length', 'max'=>40),
			array('customername, customercell, avaliablility, year, type, model, OSversion, ebay, soldprice', 'length', 'max'=>30),
			array('serialnumb, gcardmodel, DisplayOutput', 'length', 'max'=>50),
			array('cpu, cpuspeed, gcard, ram, HardDrive, HDType, size, usbN, DVDdrive, webcam, wifi, lan, OS, SystemType', 'length', 'max'=>11),
			array('Pic', 'length', 'max'=>100),
			array('SbaskedforID', 'length', 'max'=>999),
			array('SBasked', 'length', 'max'=>300),
			array('cpucores', 'length', 'max'=>45),
			array('onsale', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('brand, customername, customercell, avaliablility, year, type, model, serialnumb, cpu, cpumodel, cpuspeed, gcard, gcardmodel, ram, HardDrive, HDType, size, usbtype, usbN, DisplayOutput, DVDdrive, webcam, wifi, lan, OS, OSversion, SystemType, Pic, Id, ebay, sellingprice, soldprice, SbaskedforID, SBasked, cpucores, onsale, secprice', 'safe', 'on'=>'search'),
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
			'customername' => 'Customername',
			'customercell' => 'Customercell',
			'avaliablility' => 'Avaliablility',
			'year' => 'Year',
			'type' => 'Type',
			'model' => 'Model',
			'serialnumb' => 'Serialnumb',
			'cpu' => 'Cpu',
			'cpumodel' => 'Cpumodel',
			'cpuspeed' => 'Cpuspeed',
			'gcard' => 'Gcard',
			'gcardmodel' => 'Gcardmodel',
			'ram' => 'Ram',
			'HardDrive' => 'Hard Drive',
			'HDType' => 'Hdtype',
			'size' => 'Size',
			'usbtype' => 'Usbtype',
			'usbN' => 'Usb N',
			'DisplayOutput' => 'Display Output',
			'DVDdrive' => 'Dvddrive',
			'webcam' => 'Webcam',
			'wifi' => 'Wifi',
			'lan' => 'Lan',
			'OS' => 'Os',
			'OSversion' => 'Osversion',
			'SystemType' => 'System Type',
			'Pic' => 'Pic',
			'Id' => 'ID',
			'ebay' => 'Ebay',
			'sellingprice' => 'Sellingprice',
			'soldprice' => 'Soldprice',
			'SbaskedforID' => 'Sbaskedfor',
			'SBasked' => 'Sbasked',
			'cpucores' => 'Cpucores',
			'onsale' => 'Onsale',
			'secprice' => 'Secprice',
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
		$criteria->compare('customername',$this->customername,true);
		$criteria->compare('customercell',$this->customercell,true);
		$criteria->compare('avaliablility',$this->avaliablility,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('serialnumb',$this->serialnumb,true);
		$criteria->compare('cpu',$this->cpu,true);
		$criteria->compare('cpumodel',$this->cpumodel,true);
		$criteria->compare('cpuspeed',$this->cpuspeed,true);
		$criteria->compare('gcard',$this->gcard,true);
		$criteria->compare('gcardmodel',$this->gcardmodel,true);
		$criteria->compare('ram',$this->ram,true);
		$criteria->compare('HardDrive',$this->HardDrive,true);
		$criteria->compare('HDType',$this->HDType,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('usbtype',$this->usbtype,true);
		$criteria->compare('usbN',$this->usbN,true);
		$criteria->compare('DisplayOutput',$this->DisplayOutput,true);
		$criteria->compare('DVDdrive',$this->DVDdrive,true);
		$criteria->compare('webcam',$this->webcam,true);
		$criteria->compare('wifi',$this->wifi,true);
		$criteria->compare('lan',$this->lan,true);
		$criteria->compare('OS',$this->OS,true);
		$criteria->compare('OSversion',$this->OSversion,true);
		$criteria->compare('SystemType',$this->SystemType,true);
		$criteria->compare('Pic',$this->Pic,true);
		$criteria->compare('Id',$this->Id);
		$criteria->compare('ebay',$this->ebay,true);
		$criteria->compare('sellingprice',$this->sellingprice);
		$criteria->compare('soldprice',$this->soldprice,true);
		$criteria->compare('SbaskedforID',$this->SbaskedforID,true);
		$criteria->compare('SBasked',$this->SBasked,true);
		$criteria->compare('cpucores',$this->cpucores,true);
		$criteria->compare('onsale',$this->onsale,true);
		$criteria->compare('secprice',$this->secprice);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Computer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
