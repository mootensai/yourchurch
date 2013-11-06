<?php
/* @var $this PelayananController */
/* @var $model Pelayanan */

$this->breadcrumbs=array(
	'Pelayanan'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pelayanan', 'url'=>array('index')),
	array('label'=>'Create Pelayanan', 'url'=>array('create')),
	array('label'=>'Update Pelayanan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pelayanan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelayanan', 'url'=>array('admin')),
);
?>

<h1>View Pelayanan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pelayanan',
	),
)); ?>
