<?php
/* @var $this AcaraController */
/* @var $model Acara */

$this->breadcrumbs=array(
	'Acara'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acara', 'url'=>array('index')),
	array('label'=>'Create Acara', 'url'=>array('create')),
	array('label'=>'View Acara', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Acara', 'url'=>array('admin')),
);
?>

<h1>Update Acara <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>