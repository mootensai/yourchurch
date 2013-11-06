<?php
/* @var $this PertanyaanController */
/* @var $data Pertanyaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pertanyaan')); ?>:</b>
	<?php echo CHtml::encode($data->pertanyaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isMultiple')); ?>:</b>
	<?php echo CHtml::encode($data->isMultiple); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isClosed')); ?>:</b>
	<?php echo CHtml::encode($data->isClosed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>