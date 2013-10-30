<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'otform-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'employee_id',array('class'=>'span2')); ?>

        <?php echo $form->datepickerRow($model,'date',array(
          'options' => array('language' => 'en'),
          'prepend' => '<i class="icon-calendar"></i>'
        )); ?>
        <?php echo $form->timepickerRow($model,'start_time',array('class' => 'input-small')); ?>
        <?php echo $form->timepickerRow($model,'end_time',array('class' => 'input-small')); ?>
	<?php echo $form->textFieldRow($model,'total_hours',array('class'=>'span1' ,'readonly'=>'true')); ?>
	<?php echo $form->textAreaRow($model,'remarks',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
