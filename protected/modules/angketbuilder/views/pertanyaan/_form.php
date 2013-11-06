<?php
/* @var $this PertanyaanController */
/* @var $pertanyaan Pertanyaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pertanyaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($pertanyaan); ?>

	<div class="row">
                <?php echo $form->labelEx($pertanyaan,'pertanyaan'); ?>
		<?php echo $form->textArea($pertanyaan,'pertanyaan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($pertanyaan,'pertanyaan'); ?>
        </div>
		
        <div class="row">
            <div class="column">
                <?php echo $form->checkBox($pertanyaan,'isMultiple'); ?>
                <?php echo $form->labelEx($pertanyaan,'isMultiple',array(
                    'style'=> 'display:inline;'
                )); ?>
                <?php echo $form->error($pertanyaan,'isMultiple'); ?>
                
            </div>
            <div class="column">
                <?php echo $form->checkBox($pertanyaan,'isClosed'); ?>
                <?php echo $form->labelEx($pertanyaan,'isClosed',array(
                    'style'=> 'display:inline;'
                )); ?>
                <?php echo $form->error($pertanyaan,'isClosed'); ?>
            </div>
        </div>

        <div class="clear"></div>
        
        <div class="pilihan"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($pertanyaan->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->