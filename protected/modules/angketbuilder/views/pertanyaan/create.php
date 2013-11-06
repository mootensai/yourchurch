<?php
/* @var $this PertanyaanController */
/* @var $pertanyaan Pertanyaan */

$this->breadcrumbs=array(
	'Pertanyaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pertanyaan', 'url'=>array('index')),
	array('label'=>'Manage Pertanyaan', 'url'=>array('admin')),
);
?>

<h1>Create Pertanyaan</h1>

<?php $this->renderPartial('_form', array('pertanyaan'=>$pertanyaan)); ?>