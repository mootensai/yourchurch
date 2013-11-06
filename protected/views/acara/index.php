<?php
/* @var $this AcaraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Acara',
);

$this->menu=array(
	array('label'=>'Create Acara', 'url'=>array('create')),
	array('label'=>'Manage Acara', 'url'=>array('admin')),
);
?>

<h1>Acara</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
