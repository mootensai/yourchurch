<?php
/* @var $this AngketController */
/* @var $angket Angket */
/* @var $pertanyaan Pertanyaan */
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

	<?php echo $form->errorSummary($angket); ?>

	<div class="column">
		<?php echo $form->labelEx($angket,'judul',array('style'=>'display:inline')); ?>
                <?php echo $form->textField($angket,'judul',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($angket,'judul'); ?>
        </div>
        <div class="column">
		<?php echo $form->labelEx($angket,'tanggal_sebar',array('style'=>'display:inline')); ?>
		<?php 
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $angket,
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
		<?php echo $form->error($angket,'tanggal_sebar'); ?>
            
	</div>
        <div class="clear"></div>
        <hr />
        <div class="row">
            <div class="column">
                1.
            </div>
            <div class="column">
                <?php echo $form->labelEx($pertanyaan,'pertanyaan'); ?>
                <?php echo $form->dropDownList($pertanyaan, 'pertanyaan',
                        CHtml::listData($pertanyaan->findAll(), 'id', 'pertanyaan'),
                        array('id'=>'dropDownPertanyaan')); ?>
                <?php //echo $form->textField($pertanyaan,'pertanyaan',array('size'=>30,'maxlength'=>30)); ?>
                <?php echo $form->error($pertanyaan,'pertanyaan'); ?>
            </div>
            <div class="column">
                <a></a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="row">
            <div class="column">
                <?php echo CHtml::submitButton($angket->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
        </div>
        


<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
        'id'=>'ext-form',
        'options'=>array(
            'autoOpen'=>false,
            'modal'=>true,
            'width'=>'auto',
            'height'=>'auto',
        ),
    ));
?>
<iframe id="form-frame" width="100%" height="100%"></iframe>
<?php
    $this->endWidget();
?>

<div id="pertanyaan-form">
    <?php //$this->renderPartial('/pertanyaan/create',$pertanyaan);?>
    <div class="column">
        <?php echo CHtml::radioButton('isMultiple', true,array('value'=>0,'uncheckValue'=>0));?>Single<br />
        <?php echo CHtml::radioButton('isMultiple', false,array('value'=>1, 'uncheckValue'=>0));?>Multiple
    </div>
    <div class="column">
        <?php echo CHtml::radioButton('isClosed', true,array('value'=>1,'uncheckValue'=>0));?>Closed<br />
        <?php echo CHtml::radioButton('isClosed', false,array('value'=>0, 'uncheckValue'=>0));?>Open
    </div>
</div>