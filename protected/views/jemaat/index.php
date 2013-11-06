<?php
/* @var $this JemaatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jemaat',
);

$this->menu=array(
	array('label'=>'Buat Data Jemaat', 'url'=>array('create')),
	array('label'=>'Manage Jemaat', 'url'=>array('admin')),
);
?>

<h1>Jemaat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
