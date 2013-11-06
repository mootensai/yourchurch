<?php

/**
 * This is the model class for table "basic_jemaat".
 *
 * The followings are the available columns in table 'basic_jemaat':
 * @property integer $id
 * @property string $nama
 * @property string $nama_panggilan
 * @property string $nama_chinese
 * @property string $alamat
 * @property string $telepon
 * @property string $hp1
 * @property string $hp2
 * @property string $email
 * @property string $tanggal_lahir
 * @property integer $isMale
 * @property string $kota_lahir
 * @property string $golongan_darah
 * @property integer $isjemaat
 * @property integer $tahun_berjemaat
 * @property integer $tahun_dibabtis
 * @property string $pekerjaan
 * @property string $bidang_pekerjaan
 * @property string $keahlian
 * @property string $keterangan_pekerjaan
 * @property string $hobby
 * @property integer $father_id
 * @property integer $mother_id
 * @property string $created
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property JemaatPelayanan[] $jemaatPelayanans
 */
class Jemaat extends CActiveRecord 
{
    public $pelayananIds = array();
    public $mengambilPelayanan = array();
    //public $keteranganPelayanan = array();
    public $acaraIds = array();
    public $mengikutiAcara = array();
    public $usia;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'basic_jemaat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, hp1, tanggal_lahir, kota_lahir, pekerjaan, bidang_pekerjaan, father_id, mother_id', 'required'),
			array('isjemaat, tahun_berjemaat, tahun_dibabtis, isMale', 'numerical', 'integerOnly'=>true),
			array('nama, nama_chinese', 'length', 'max'=>100),
			array('nama_panggilan', 'length', 'max'=>20),
			array('telepon, hp1, hp2', 'length', 'max'=>15),
			array('email', 'length', 'max'=>50),
			array('kota_lahir, pekerjaan, bidang_pekerjaan, keahlian, hobby', 'length', 'max'=>30),
			array('golongan_darah', 'length', 'max'=>3),
			array('keterangan_pekerjaan, pelayananIds, acaraIds, modified', 'safe'),
			array('nama, nama_panggilan, nama_chinese, alamat, telepon, hp1, hp2, email, tanggal_lahir, usia, kota_lahir, golongan_darah, isjemaat, tahun_berjemaat, pekerjaan, bidang_pekerjaan, keahlian, hobby, created, modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'pelayanan' => array(self::MANY_MANY, 'Pelayanan', 'basic_jemaat_pelayanan(jemaat_id, pelayanan_id)'),
                        'acara' => array(self::MANY_MANY, 'Acara', 'basic_jemaat_acara(jemaat_id, acara_id)'),
                        'user' => array(self::BELONGS_TO, 'User', 'user_id'),
                        'jemaat' => array(self::BELONGS_TO, 'Jemaat', 'id'),
		);
	}
        
        public function behaviors() {
            return array(
                'CAdvancedArBehavior' => array(
                    'class' => 'application.extensions.CAdvancedArBehavior'
                ));
        }

        /**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'nama_panggilan' => 'Nama Panggilan',
			'nama_chinese' => 'Nama Chinese',
			'alamat' => 'Alamat',
			'telepon' => 'Telepon',
			'hp1' => 'Hp1',
			'hp2' => 'Hp2',
			'email' => 'Email',
			'tanggal_lahir' => 'Tanggal Lahir',
                        'isMale'=>'Jenis Kelamin',
			'kota_lahir' => 'Kota Lahir',
			'usia' => 'Usia',
			'golongan_darah' => 'Golongan Darah',
			'isjemaat' => 'Anggota',
			'tahun_berjemaat' => 'Tahun Berjemaat',
			'tahun_dibabtis' => 'Tahun Dibabtis',
			'pekerjaan' => 'Pekerjaan',
			'bidang_pekerjaan' => 'Bidang Pekerjaan',
			'keahlian' => 'Keahlian',
			'keterangan_pekerjaan' => 'Keterangan Pekerjaan',
			'hobby' => 'Hobby',
                        'father_id' => 'Ayah',
                        'mother_id' => 'Ibu',
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

		//$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nama_panggilan',$this->nama_panggilan,true);
		$criteria->compare('nama_chinese',$this->nama_chinese,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('hp1',$this->hp1,true);
		$criteria->compare('hp2',$this->hp2,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tanggal_lahir', $this->tanggal_lahir);
                $criteria->compare('isMale',$this->isMale,true);
		$criteria->compare('kota_lahir',$this->kota_lahir,true);
		$criteria->compare('usia',$this->usia,true);
		$criteria->compare('golongan_darah',$this->golongan_darah,true);
		$criteria->compare('isjemaat',$this->isjemaat);
		$criteria->compare('tahun_berjemaat',$this->tahun_berjemaat);
		$criteria->compare('tahun_dibabtis',$this->tahun_dibabtis);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('bidang_pekerjaan',$this->bidang_pekerjaan,true);
		$criteria->compare('keahlian',$this->keahlian,true);
		$criteria->compare('hobby',$this->hobby,true);
		$criteria->compare('father_id',$this->father_id,true);
		$criteria->compare('mother_id',$this->mother_id,true);
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
	 * @return Jemaat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterFind(){
            $this->pelayananIds = array_reverse(array_keys(CHtml::listData($this->pelayanan, 'id', 'pelayanan')));
            $this->mengambilPelayanan = array_reverse(array_keys(CHtml::listData($this->pelayanan, 'pelayanan', 'id')));
            
            $this->acaraIds = array_reverse(array_keys(CHtml::listData($this->acara, 'id', 'acara')));
            $this->mengikutiAcara = array_reverse(array_keys(CHtml::listData($this->acara, 'acara', 'id')));
            
            
            $tahunIni = date('Y');
            $tahunLahir = date_format(date_create($this->tanggal_lahir), 'Y');
            $usia = $tahunIni - $tahunLahir;
            if($this->usia != $usia){
                $this->usia = $usia;
                $this->save();
            }
                
            $this->tanggal_lahir = date_format(date_create($this->tanggal_lahir), 'd-M-Y');
            $this->created = date_format(date_create($this->created), 'd-M-Y H:i:s');
            if($this->modified != '0000-00-00 00:00:00')
                    $this->modified = date_format(date_create($this->modified), 'd-M-Y H:i:s');
            else
                    $this->modified = 'Belum pernah di update';

            //$this->tahun_dibabtis = ($this->tahun_dibabtis) ? $this->tahun_dibabtis : 'Belum dibabtis';
            
            return parent::afterFind();
            return true;
        }
        public function beforeSave() {
            $this->tanggal_lahir = date_format(date_create($this->tanggal_lahir), 'Y-m-d');
            $this->created = date_format(date_create($this->created), 'Y-m-d H:i:s');
            if($this->modified != '0000-00-00 00:00:00')
                    $this->modified = date_format(date_create($this->modified), 'Y-m-d H:i:s');
            parent::beforeSave();
            return true;
        }
}
