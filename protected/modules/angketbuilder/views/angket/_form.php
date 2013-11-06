<?php
/* @var $this AngketController */
/* @var $model Angket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'angket-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'tanggal_sebar'); ?>
		<?php 
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'tanggal_sebar',
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
		<?php echo $form->error($model,'tanggal_sebar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->