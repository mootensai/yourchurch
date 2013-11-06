<?php

/**
 * This is the model class for table "basic_pelayanan".
 *
 * The followings are the available columns in table 'basic_pelayanan':
 * @property integer $id
 * @property string $pelayanan
 *
 * The followings are the available model relations:
 * @property JemaatPelayanan[] $jemaatPelayanans
 */
class Pelayanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'basic_pelayanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('pelayanan', 'required'),
			array('pelayanan', 'length', 'max'=>30),
			array('pelayanan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'jemaat' => array(self::MANY_MANY, 'Jemaat', 'basic_jemaat_pelayanan(pelayanan_id, jemaat_id)'),
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
			'pelayanan' => 'Pelayanan',
                        'user_id' => 'Pembuat'
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

//		$criteria->compare('id',$this->id);
		$criteria->compare('pelayanan',$this->pelayanan,true);
                $criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pelayanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
