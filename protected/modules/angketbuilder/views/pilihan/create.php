<?php
/* @var $this PilihanController */
/* @var $model Pilihan */

$this->breadcrumbs=array(
	'Pilihans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pilihan', 'url'=>array('index')),
	array('label'=>'Manage Pilihan', 'url'=>array('admin')),
);
?>

<h1>Create Pilihan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>