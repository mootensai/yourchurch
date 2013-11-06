<?php
/* @var $this AngketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Angket',
);

$this->menu=array(
	array('label'=>'Create Angket', 'url'=>array('create')),
	array('label'=>'Manage Angket', 'url'=>array('admin')),
        array('label'=>'Buat Pertanyaan', 'url'=>array('pertanyaan/create')),
);
?>

<h1>Angket</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
