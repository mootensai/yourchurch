<?php
/* @var $this PilihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pilihans',
);

$this->menu=array(
	array('label'=>'Create Pilihan', 'url'=>array('create')),
	array('label'=>'Manage Pilihan', 'url'=>array('admin')),
);
?>

<h1>Pilihans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
