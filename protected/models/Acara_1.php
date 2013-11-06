<?php

/**
 * This is the model class for table "basic_acara".
 *
 * The followings are the available columns in table 'basic_acara':
 * @property integer $id
 * @property string $acara
 *
 * The followings are the available model relations:
 * @property JemaatAcara[] $jemaatAcaras
 */
class Acara extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'basic_acara';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acara', 'required'),
			array('acara', 'length', 'max'=>30),
			array('acara', 'safe', 'on'=>'search'),
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
//			'jemaatAcaras' => array(self::HAS_MANY, 'JemaatAcara', 'acara_id'),
                    'jemaat' => array(self::MANY_MANY, 'Jemaat', 'basic_jemaat_acara(acara_id, jemaat_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'acara' => 'Acara',
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

		$criteria=new CDbCriteria;
                
		$criteria->compare('acara',$this->acara,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Acara the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
