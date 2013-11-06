<?php
/* @var $this PelayananController */
/* @var $model Pelayanan */

$this->breadcrumbs=array(
	'Pelayanan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelayanan', 'url'=>array('index')),
	array('label'=>'Manage Pelayanan', 'url'=>array('admin')),
);
?>

<h1>Create Pelayanan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>