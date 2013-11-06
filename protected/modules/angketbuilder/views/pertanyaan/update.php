<?php
/* @var $this PertanyaanController */
/* @var $model Pertanyaan */

$this->breadcrumbs=array(
	'Pertanyaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pertanyaan', 'url'=>array('index')),
	array('label'=>'Create Pertanyaan', 'url'=>array('create')),
	array('label'=>'View Pertanyaan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pertanyaan', 'url'=>array('admin')),
);
?>

<h1>Update Pertanyaan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>