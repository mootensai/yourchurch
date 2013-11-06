<?php
/* @var $this PertanyaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pertanyaans',
);

$this->menu=array(
	array('label'=>'Create Pertanyaan', 'url'=>array('create')),
	array('label'=>'Manage Pertanyaan', 'url'=>array('admin')),
);
?>

<h1>Pertanyaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
