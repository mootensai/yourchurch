<?php

/**
 * This is the model class for table "angketbuilder_angket".
 *
 * The followings are the available columns in table 'angketbuilder_angket':
 * @property integer $id
 * @property string $judul
 * @property string $tanggal_sebar
 * @property integer $user_id
 * @property string $created
 * @property string $modified
 */
class Angket extends CActiveRecord
{
    public $pertanyaanIds = array();
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'angketbuilder_angket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, tanggal_sebar', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>30),
                        array('user_id, created, modified', 'safe'),
			array('judul, tanggal_sebar, user_id, created, modified', 'safe', 'on'=>'search'),
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
                    'pertanyaan' => array(self::MANY_MANY, 'Pertanyaan', 'angketbuilder_angket_pertanyaan(angket_id, pertanyaan_id)'),
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
			'judul' => 'Judul',
			'tanggal_sebar' => 'Tanggal Sebar',
			'user_id' => 'Pembuat',
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
		$criteria=new CDbCriteria;

//		$criteria->compare('id',$this->id);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('tanggal_sebar',$this->tanggal_sebar,true);
		$criteria->compare('user_id',$this->user_id);
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
	 * @return Angket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterFind() {
            $this->tanggal_sebar = date_format(date_create($this->tanggal_sebar), 'd-M-Y');
            $this->created = date_format(date_create($this->created), 'd-M-Y H:i:s');
            if($this->modified != '0000-00-00 00:00:00')
                $this->modified = date_format(date_create($this->modified), 'd-M-Y H:i:s');
            else
                $this->modified = 'Belum pernah di update';
            parent::afterFind();
            return true;
        }
        
        public function beforeSave() {
            $this->tanggal_sebar = date_format(date_create($this->tanggal_sebar), 'Y-m-d');
            $this->created = date_format(date_create($this->created), 'Y-m-d H:i:s');
            if($this->modified != '0000-00-00 00:00:00')
                $this->modified = date_format(date_create($this->modified), 'Y-m-d H:i:s');
            parent::beforeSave();
            return true;
        }
}
