<?php
/* @var $this LeaveController */
/* @var $model Leave */
/* @var $form CActiveForm */

#echo "<pre>";
#print_r($commands);
#echo "</pre>";
#die();
#echo $pos->name;
#foreach($commands as $r){
#	echo $r->name."<br>";
#}


?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'leave-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
  <?php 
    $user = User::model()->findByPk(Yii::app()->user->id);
  ?>

    <?php echo $form->hiddenField($model,'employee_id',array('value'=>Yii::app()->user->id)); ?>
   <tr>
     <td colspan=2> 
       <?php  echo 'Name :' .' '. '<b>'  . ucwords(strtolower($user->profile->lastname)) . ' ' . ucwords(strtolower($user->profile->firstname)) . ' ' . ucwords(strtolower($user->profile->middle_initial)).'</b>';?>
     </td> 
   </tr>

    <tr>
     <td colspan=2> 
        <?php echo $form->datepickerRow($model,'date_filed',array(
          'options' => array(
            'language' => 'en',
            'format'=>'yyyy-mm-dd'
          ),
          'prepend' => '<i class="icon-calendar"></i>'
        )); ?>
     </td> 
   </tr>
    
   <tr>
     <td colspan=2> 
       <?php  echo 'Position Designation : ' .' '. '<b>' .$pos->name.'</b>';?>
     </td> 
   </tr>
    
   <tr>
     <td colspan=2> 
       <b><font size=3>TYPE OF LEAVE :</font></b><br> 
        <?php echo $form->radioButtonListRow(
            $model,
            'leave_type_id',
            $lt
        ); ?>
     </td> 
   </tr>

   <tr id="specify">
     <td colspan=2> 
		   <?php echo $form->labelEx($model,'reason'); ?>
		   <?php echo $form->textField($model,'reason',array('size'=>60,'maxlength'=>255)); ?>
		   <?php echo $form->error($model,'reason'); ?>
     </td>     
   </tr>

   <tr>
     <td colspan=2> 
       <b><font size=3>INCLUSIVE DATES :</font></b> 
     </td>     
   </tr>
   <tr>
     <td> 
       <?php echo $form->datepickerRow($model,'start_date',array(
         'options' => array(
           'language' => 'en',
           'format'=>'yyyy-mm-dd'
         ),
         'prepend' => '<i class="icon-calendar"></i>'
       )); ?>
     </td>     

     <td>    
       <?php echo $form->datepickerRow($model,'end_date',array(
         'options' => array(
           'language' => 'en',
           'format'=>'yyyy-mm-dd'
         ),
         'prepend' => '<i class="icon-calendar"></i>'
       )); ?>
     </td>     
   </tr>

   <tr>
     <td colspan=2>     
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
     </td>     
   </tr>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>
$('#specify').hide();
$('input:radio').change(
    function(){
      var lt = $("input[name='Leave[leave_type_id]']:checked").val();
      if(lt==4 || lt==2) 
        $('#specify').show();
      else
        $('#specify').hide();
    }  
);          

</script>
