<?php
/* @var $this PertanyaanController */
/* @var $model Pertanyaan */

$this->breadcrumbs=array(
	'Pertanyaans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pertanyaan', 'url'=>array('index')),
	array('label'=>'Create Pertanyaan', 'url'=>array('create')),
	array('label'=>'Update Pertanyaan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pertanyaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pertanyaan', 'url'=>array('admin')),
);
?>

<h1>View Pertanyaan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pertanyaan',
		'isMultiple',
		'isClosed',
		'created',
		'modified',
		'user_id',
	),
)); ?>
