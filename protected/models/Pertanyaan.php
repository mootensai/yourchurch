<?php

/**
 * This is the model class for table "angketbuilder_pertanyaan".
 *
 * The followings are the available columns in table 'angketbuilder_pertanyaan':
 * @property integer $id
 * @property string $pertanyaan
 * @property integer $isMultiple
 * @property integer $isClosed
 * @property string $created
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property AngketPertanyaan[] $angketPertanyaans
 */
class Pertanyaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'angketbuilder_pertanyaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pertanyaan, created', 'required'),
			array('isMultiple, isClosed', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pertanyaan, isMultiple, isClosed, created, modified', 'safe', 'on'=>'search'),
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
                    'angket' => array(self::MANY_MANY, 'Angket', 'angketbuilder_angket_pertanyaan(pertanyaan_id, angket_id)'),
                    'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pertanyaan' => 'Pertanyaan',
			'isMultiple' => 'Boleh Memilih Lebih Dari 1?',
			'isClosed' => 'Pertanyaan Ini Tertutup?',
			'created' => 'Created',
			'modified' => 'Modified',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pertanyaan',$this->pertanyaan,true);
		$criteria->compare('isMultiple',$this->isMultiple);
		$criteria->compare('isClosed',$this->isClosed);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pertanyaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
