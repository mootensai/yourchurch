<?php
/* @var $this JemaatController */
/* @var $model Jemaat */
/* @var $form CActiveForm */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerScript('search', "
$('#fatherDD').on('click',function(){
	$('#fatherRB').prop('checked',true);
	return false;
});
$('#motherDD').on('click',function(){
	$('#motherRB').prop('checked',true);
	return false;
});
$('#acara-baru').on('click',function(){
    alert("
 .$this->renderPartial('_search',array('model'=>$model),false,true).
");
});
");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jemaat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_panggilan'); ?>
		<?php echo $form->textField($model,'nama_panggilan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama_panggilan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_chinese'); ?>
		<?php echo $form->textField($model,'nama_chinese',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_chinese'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp1'); ?>
		<?php echo $form->textField($model,'hp1',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'hp1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp2'); ?>
		<?php echo $form->textField($model,'hp2',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'hp2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
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
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'isMale'); ?>
		<?php echo $form->radioButton($model,'isMale',array('value'=>1,'uncheckValue'=>null)); ?>Pria
                <?php echo $form->radioButton($model,'isMale',array('value'=>0,'uncheckValue'=>null)); ?>Wanita
		<?php echo $form->error($model,'kota_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kota_lahir'); ?>
		<?php echo $form->textField($model,'kota_lahir',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'kota_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'golongan_darah'); ?>
		<?php echo $form->textField($model,'golongan_darah',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isjemaat',array('label' => 'Anggota')); ?>
		<?php echo $form->checkBox($model,'isjemaat');  ?>
		<?php echo $form->error($model,'isjemaat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_berjemaat'); ?>
		<?php echo $form->textField($model,'tahun_berjemaat'); ?>
		<?php echo $form->error($model,'tahun_berjemaat'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'tahun_dibabtis'); ?>
		<?php echo $form->textField($model,'tahun_dibabtis'); ?>
		<?php echo $form->error($model,'tahun_dibabtis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_pekerjaan'); ?>
		<?php echo $form->textField($model,'bidang_pekerjaan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bidang_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keahlian'); ?>
		<?php echo $form->textField($model,'keahlian',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'keahlian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan_pekerjaan'); ?>
		<?php echo $form->textArea($model,'keterangan_pekerjaan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan_pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobby'); ?>
		<?php echo $form->textField($model,'hobby',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'hobby'); ?>
                <?php //echo $form->textField($modelM2M,'keterangan'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'father_id');?>
		<?php echo $form->radioButton($model,'father_id',array('value'=>0,'uncheckValue'=>null,'selected')); ?>Tidak Ada Data
		<?php echo $form->radioButton($model,'father_id',array('uncheckValue'=>0,'id'=>'fatherRB','checked'=>'true')); ?>
                <?php echo $form->dropDownList($model,'father_id', CHtml::listData(Jemaat::model()->findAll('isMale = 1'), 'id', 'nama'),array('id'=>'fatherDD')); ?>
		<?php echo $form->error($model,'father_id'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'mother_id');?>
		<?php echo $form->radioButton($model,'mother_id',array('value'=>0,'uncheckValue'=>null)); ?>Tidak Ada Data
		<?php echo $form->radioButton($model,'mother_id',array('uncheckValue'=>0,'id'=>'motherRB','checked'=>'true')); ?>
                <?php echo $form->dropDownList($model,'mother_id', CHtml::listData(Jemaat::model()->findAll('isMale = 0'), 'id', 'nama'),array('id'=>'motherDD')); ?>
		<?php echo $form->error($model,'mother_id'); ?>
	</div>
        
        <div class="row">
                <div class="column">
                <?php echo $form->labelEx($model,'acaraIds', array('label'=>'Mengikuti')); ?>
                <?php echo $form->checkBoxList($model,'acaraIds',  CHtml::listData(Acara::model()->findAll(), 'id', 'acara'),
                        array('attributeitem' => 'acaraId','labelOptions'=>array('style'=>'display:inline')));
                //jemaatPelayananModel
                ?><br />
                <?php echo CHtml::link('Buat Baru','#',array('id'=>'acara-baru')); ?>
                <?php echo $form->error($model,'pelayananIds'); ?>
                </div>
                <div class="column">
                        <?php echo $form->labelEx($model,'pelayananIds', array('label'=>'Pelayanan')); ?>
                        <?php echo $form->checkBoxList($model,'pelayananIds',  CHtml::listData(Pelayanan::model()->findAll(), 'id', 'pelayanan'),
                                array('attributeitem' => 'pelayananId','labelOptions'=>array('style'=>'display:inline'),
        //                        'template'=>'{input} {label} Keterangan : '.  
                                //CHtml::textField('Jemaat[pelayananIds][keterangan][]','')
        //                            $form->textField($model,'pelayananIds[keterangan][]',array('value'=>''))
                                ));
                        
                        //jemaatPelayananModel
                        
                        ?><br />
                        <?php echo CHtml::link('Buat Baru','#',array('id'=>'pelayanan-baru')); ?>
                        <?php echo $form->error($model,'pelayananIds'); ?>
                </div>
        </div>
        
        <div style="clear:both"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->