<?php
/* @var $this AcaraController */
/* @var $model Acara */

$this->breadcrumbs=array(
	'Acara'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Acara', 'url'=>array('index')),
	array('label'=>'Manage Acara', 'url'=>array('admin')),
);
?>

<h1>Create Acara</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>