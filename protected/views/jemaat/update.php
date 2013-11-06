<?php
/* @var $this JemaatController */
/* @var $model Jemaat */

$this->breadcrumbs=array(
	'Jemaat'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lihat Daftar Jemaat', 'url'=>array('index')),
	array('label'=>'Buat Data Jemaat', 'url'=>array('create')),
	array('label'=>'Lihat Detil Jemaat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Jemaat', 'url'=>array('admin')),
);
?>

<h1>Update Jemaat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>