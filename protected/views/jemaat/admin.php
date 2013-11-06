<?php
/* @var $this JemaatController */
/* @var $model Jemaat */

$this->breadcrumbs=array(
	'Jemaats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lihat Daftar Jemaat', 'url'=>array('index')),
	array('label'=>'Buat Data Jemaat', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jemaat-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Jemaats</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jemaat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'nama',
		'alamat',
		'tanggal_lahir',
                'usia',
//		'kota_lahir',
		'golongan_darah',
//		'isjemaat',
		'tahun_berjemaat',
                'tahun_dibabtis',
//		'pekerjaan',
//		'bidang_pekerjaan',
//		'keahlian',
//		'keterangan_pekerjaan',
		'hobby',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
