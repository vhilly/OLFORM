<link rel="stylesheet" href="css/otform.css" type="text/css">
<div id="otform_content">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'otform-form',
	'enableAjaxValidation'=>false,
)); ?>


<?php echo $form->errorSummary($model); ?>

<?php echo $form->hiddenField($model,'employee_id',array('class'=>'span2')); ?>
<?php  
  $user = User::model()->findByPk(Yii::app()->user->id);  
  $pid  = $user->profile->position_id;
  $pos = Position::model()->findByPk($pid);
?>
<b>Name:</b> <?php echo "{$user->profile->firstname} {$user->profile->lastname}" ;?>
<br>
<b>Position:</b> <?php echo $pos->name;?></b>
<br>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<table border=1 id="otform_table">
	<tr><td>
				<!---->
        <?php echo $form->datepickerRow($model,'date',array(
					'value'=>date("Y-m-d"),
          'options' => array(
						'language' => 'en',
						'format'=>'yyyy-mm-dd',
					),
          'prepend' => '<i class="icon-calendar"></i>'
        )); ?>
			</td><td>
        <?php echo $form->timepickerRow($model,'start_time',array('class' => 'input-small')); ?>
			</td><td>
        <?php echo $form->timepickerRow($model,'end_time',array('class' => 'input-small')); ?>
			</td><td>
	<?php echo $form->textAreaRow($model,'remarks',array('rows'=>1, 'cols'=>30, )); ?>
			</td>
	</tr>
</table>
<br><br>
<!--div class="form-actions"-->
<center>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</center>
<!--/div-->

<?php $this->endWidget(); ?>
<div>
