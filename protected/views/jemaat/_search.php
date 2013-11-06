<?php
/* @var $this JemaatController */
/* @var $model Jemaat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_panggilan'); ?>
		<?php echo $form->textField($model,'nama_panggilan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_chinese'); ?>
		<?php echo $form->textField($model,'nama_chinese',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hp1'); ?>
		<?php echo $form->textField($model,'hp1',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hp2'); ?>
		<?php echo $form->textField($model,'hp2',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php 
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'tanggal_lahir',
                        'options' => array(
                            'changeMonth' => true,
                            'changeYear' => true,
                            'yearRange' => '1920:2020',
                            'dateFormat' => 'yy-mm-dd'
                        ),
                        'htmlOptions' => array(
                            'size' => '10',         // textField size
                            'maxlength' => '10',    // textField maxlength
                        ),
                    )); 
                ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kota_lahir'); ?>
		<?php echo $form->textField($model,'kota_lahir',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'golongan_darah'); ?>
		<?php echo $form->textField($model,'golongan_darah',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isjemaat'); ?>
		<?php echo $form->textField($model,'isjemaat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tahun_berjemaat'); ?>
		<?php echo $form->textField($model,'tahun_berjemaat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidang_pekerjaan'); ?>
		<?php echo $form->textField($model,'bidang_pekerjaan',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keahlian'); ?>
		<?php echo $form->textField($model,'keahlian',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan_pekerjaan'); ?>
		<?php echo $form->textArea($model,'keterangan_pekerjaan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hobby'); ?>
		<?php echo $form->textField($model,'hobby',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->