<?php
/* @var $this JemaatController */
/* @var $data Jemaat */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_panggilan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_panggilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_chinese')); ?>:</b>
	<?php echo CHtml::encode($data->nama_chinese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hp1')); ?>:</b>
	<?php echo CHtml::encode($data->hp1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hp2')); ?>:</b>
	<?php echo CHtml::encode($data->hp2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kota_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->kota_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('golongan_darah')); ?>:</b>
	<?php echo CHtml::encode($data->golongan_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isjemaat')); ?>:</b>
	<?php echo CHtml::encode($data->isjemaat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_berjemaat')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_berjemaat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bidang_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->bidang_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keahlian')); ?>:</b>
	<?php echo CHtml::encode($data->keahlian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan_pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan_pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hobby')); ?>:</b>
	<?php echo CHtml::encode($data->hobby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>