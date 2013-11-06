<?php
/* @var $this AngketController */
/* @var $angket Angket */

$this->breadcrumbs=array(
	'Angket'=>array('index'),
	$angket->id=>array('view','id'=>$angket->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Angket', 'url'=>array('index')),
	array('label'=>'Create Angket', 'url'=>array('create')),
	array('label'=>'View Angket', 'url'=>array('view', 'id'=>$angket->id)),
	array('label'=>'Manage Angket', 'url'=>array('admin')),
);
?>

<h1>Update Angket <?php echo $angket->id; ?></h1>

<?php $this->renderPartial('_updateForm', array('angket'=>$angket,'pertanyaan'=>$pertanyaan)); ?>