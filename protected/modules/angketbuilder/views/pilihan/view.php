<?php
/* @var $this PilihanController */
/* @var $model Pilihan */

$this->breadcrumbs=array(
	'Pilihans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pilihan', 'url'=>array('index')),
	array('label'=>'Create Pilihan', 'url'=>array('create')),
	array('label'=>'Update Pilihan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pilihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pilihan', 'url'=>array('admin')),
);
?>

<h1>View Pilihan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pilihan',
		'pertanyaan_id',
		'created',
		'modified',
		'user_id',
	),
)); ?>
