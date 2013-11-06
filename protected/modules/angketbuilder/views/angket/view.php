<?php
/* @var $this AngketController */
/* @var $model Angket */

$this->breadcrumbs=array(
	'Angkets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Angket', 'url'=>array('index')),
	array('label'=>'Create Angket', 'url'=>array('create')),
	array('label'=>'Update Angket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Angket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Angket', 'url'=>array('admin')),
);
?>

<h1>View Angket #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'judul',
		'tanggal_sebar',
		'user_id',
		'created',
		'modified',
	),
)); ?>
