<?php

/**
 * This is the model class for table "angketbuilder_pilihan".
 *
 * The followings are the available columns in table 'angketbuilder_pilihan':
 * @property integer $id
 * @property string $pilihan
 * @property integer $pertanyaan_id
 * @property string $created
 * @property string $modified
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Pertanyaan $pertanyaan
 * @property BasicUser $user
 */
class Pilihan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'angketbuilder_pilihan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pilihan, pertanyaan_id, created, modified, user_id', 'required'),
			array('pertanyaan_id, user_id', 'numerical', 'integerOnly'=>true),
			array('pilihan', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pilihan, pertanyaan_id, created, modified, user_id', 'safe', 'on'=>'search'),
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
			'pertanyaan' => array(self::BELONGS_TO, 'Pertanyaan', 'pertanyaan_id'),
			'user' => array(self::BELONGS_TO, 'BasicUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pilihan' => 'Pilihan',
			'pertanyaan_id' => 'Pertanyaan',
			'created' => 'Created',
			'modified' => 'Modified',
			'user_id' => 'User',
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
		$criteria->compare('pilihan',$this->pilihan,true);
		$criteria->compare('pertanyaan_id',$this->pertanyaan_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pilihan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
