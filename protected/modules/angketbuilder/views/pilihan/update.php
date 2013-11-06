<?php
/* @var $this PilihanController */
/* @var $model Pilihan */

$this->breadcrumbs=array(
	'Pilihans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pilihan', 'url'=>array('index')),
	array('label'=>'Create Pilihan', 'url'=>array('create')),
	array('label'=>'View Pilihan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pilihan', 'url'=>array('admin')),
);
?>

<h1>Update Pilihan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>