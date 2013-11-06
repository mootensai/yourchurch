<?php
/* @var $this AcaraController */
/* @var $model Acara */

$this->breadcrumbs=array(
	'Acara'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Acara', 'url'=>array('index')),
	array('label'=>'Create Acara', 'url'=>array('create')),
	array('label'=>'Update Acara', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Acara', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Acara', 'url'=>array('admin')),
);
?>

<h1>View Acara #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'acara',
	),
)); ?>
