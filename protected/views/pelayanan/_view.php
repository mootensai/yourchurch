<?php
/* @var $this PelayananController */
/* @var $data Pelayanan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelayanan')); ?>:</b>
	<?php echo CHtml::encode($data->pelayanan); ?>
	<br />


</div>