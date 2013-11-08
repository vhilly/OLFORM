<?php
/* @var $this LeaveController */
/* @var $model Leave */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'leave_type_id'); ?>
		<?php echo $form->textField($model,'leave_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reason'); ?>
		<?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_filed'); ?>
		<?php echo $form->textField($model,'date_filed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sv1'); ?>
		<?php echo $form->textField($model,'sv1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sv2'); ?>
		<?php echo $form->textField($model,'sv2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'om'); ?>
		<?php echo $form->textField($model,'om'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hrm'); ?>
		<?php echo $form->textField($model,'hrm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'days_with_pay'); ?>
		<?php echo $form->textField($model,'days_with_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'days_without_pay'); ?>
		<?php echo $form->textField($model,'days_without_pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'others'); ?>
		<?php echo $form->textField($model,'others'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->