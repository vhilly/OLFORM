<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'employee_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'start_time',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'end_time',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'total_hours',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'remarks',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'date_submitted',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'tl',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'sv',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
