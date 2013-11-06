<?php
/* @var $this JemaatController */
/* @var $model Jemaat */

$this->breadcrumbs=array(
	'Jemaat'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lihat Daftar Jemaat', 'url'=>array('index')),
	array('label'=>'Manage Jemaat', 'url'=>array('admin')),
);
?>

<h1>Create Jemaat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>