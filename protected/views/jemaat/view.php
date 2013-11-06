<?php
/* @var $this JemaatController */
/* @var $model Jemaat */

$this->breadcrumbs=array(
	'Jemaat'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lihat Daftar Jemaat', 'url'=>array('index')),
	array('label'=>'Buat Data Jemaat', 'url'=>array('create')),
	array('label'=>'Update Data Jemaat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Jemaat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jemaat', 'url'=>array('admin')),
);
?>

<h1>View Jemaat #<?php echo $model->id; ?></h1>

<?php
echo Yii::trace(CVarDumper::dumpAsString($model->mengambilPelayanan), 'Mengambil PELAYANAN');
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'nama_panggilan',
		'nama_chinese',
		'alamat',
		'telepon',
		'hp1',
		'hp2',
		'email',
		'tanggal_lahir',
                array(
                    'label'=>'Jenis Kelamin',
                    'type'=>'raw',
                    'name'=>'isMale',
                    'value'=>($model->isMale) ? 'Pria':'Wanita'
                ),
		'kota_lahir',
                'usia',
		'golongan_darah',
                array(
                    'label'=>'Anggota',
                    'type'=>'raw',
                    'name'=>'isjemaat',
                    'value'=>($model->isjemaat) ? 'Ya':'Tidak'
                ),
		'tahun_berjemaat', 
                array(
                        'label'=>'Tahun Dibabtis',
                        'type'=>'raw',
                        'name'=>'tahun_dibabtis',
                        'value'=> (empty($model->tahun_dibabtis)) ? 'Belum Dibabtis' : $model->tahun_dibabtis,
                ),
		'pekerjaan',
		'bidang_pekerjaan',
		'keahlian',
		'keterangan_pekerjaan',
		'hobby',
                array(
                        'label'=>'Ayah',
                        'type'=>'raw',
                        'name'=>'father_id',
                        'value'=> function($model){
                            $data = $model->find('id ='.$model->father_id);
                            if(empty($data))
                                return "";
                            else
                                return $data->nama;
                            //$model->find('id ='.$model->mother_id)->nama == 0 ? '' : $model->find('id ='.$model->mother_id)->nama,
                        }
                ),
                array(
                        'label'=>'Ibu',
                        'type'=>'raw',
                        'name'=>'mother_id',
                        'value'=> function($model){
                            $data = $model->find('id ='.$model->mother_id);
                            if(empty($data))
                                return "";
                            else
                                return $data->nama;
                            //$model->find('id ='.$model->mother_id)->nama == 0 ? '' : $model->find('id ='.$model->mother_id)->nama,
                        }
    
                ),
                array(
                        'label'=>'Pelayanan',
                        'type'=>'raw',
                        'name'=>'pelayanan',
                        'value'=> implode('<br>',  $model->mengambilPelayanan),
                ),
                array(
                        'label'=>'Mengikuti',
                        'type'=>'raw',
                        'name'=>'acara',
                        'value'=> implode('<br>',  $model->mengikutiAcara),
                ),
		'created',
		'modified',
	),
)); ?>
