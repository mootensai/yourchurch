<?php
/* @var $this PelayananController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelayanan',
);

$this->menu=array(
	array('label'=>'Create Pelayanan', 'url'=>array('create')),
	array('label'=>'Manage Pelayanan', 'url'=>array('admin')),
);
?>

<h1>Pelayanan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
