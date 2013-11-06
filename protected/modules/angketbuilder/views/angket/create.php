<?php
/* @var $this AngketController */
/* @var $model Angket */

$this->breadcrumbs=array(
	'Angkets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Angket', 'url'=>array('index')),
	array('label'=>'Manage Angket', 'url'=>array('admin')),
);
?>

<h1>Create Angket</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>