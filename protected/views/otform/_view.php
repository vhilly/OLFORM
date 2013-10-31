<div class="view">
<<<<<<< HEAD
<?php 
  $sv=Yii::app()->user->id;
  $name=$sv?'Vhilly':'';
  if(!$sv)
   $type="success";
  else
   $type="info";
   
  $status=array(0=>'success',1=>$type,2=>'info',3=>'danger');

?>
<?php $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => $name,
        'headerIcon' => 'icon-th-list',
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);?>
<table>
  <tr>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?></th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('total_hours')); ?>:</th>
    <th><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('tl')); ?>:</th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('sv')); ?>:</th>
	  <th><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</th>
  </tr>
  <tr>
    <td><?php echo CHtml::encode($data->start_time); ?></td>
    <td><?php echo CHtml::encode($data->end_time); ?></td>
    <td><?php echo CHtml::encode($data->total_hours); ?></td>
    <td><?php echo CHtml::encode($data->remarks); ?></td>
    <td><?php echo CHtml::encode($data->date); ?></td>
    <td><?php echo CHtml::encode($data->tl); ?></td>
    <td><?php echo CHtml::encode($data->sv); ?></td>
    <td><?php echo CHtml::encode($data->status); ?></td>
  </tr>
  <tr>
    <td>
  <?php
    $approve=0;
    if($data->status ==2)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Approve' : 'Approved',
        'size' => 'small',
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,1);
             }
         })'
        ), 
      )
    #CHtml::ajaxSubmitButton('Save','url'=Yii::app()->createUrl('otform/index'),array('status'=>1));  
    );
  ?>
  </td>
    <td>
  <?php 
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => 'Disapprove',
        'size' => 'small',
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,2);
             }
         })'
        ),
      )
    );
  ?>
  </td>
  </tr>
</table>
=======

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
	<?php echo CHtml::encode($data->end_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_hours')); ?>:</b>
	<?php echo CHtml::encode($data->total_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

>>>>>>> 0d38a4930c9763d780173b204ca947d400ef70e6
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_submitted')); ?>:</b>
	<?php echo CHtml::encode($data->date_submitted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tl')); ?>:</b>
	<?php echo CHtml::encode($data->tl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sv')); ?>:</b>
	<?php echo CHtml::encode($data->sv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

<<<<<<< HEAD
*/ ?>
<?php $this->endWidget(); ?>
</div>
<script>
  function approve(id,a,type){
  $.post("<?=Yii::app()->controller->createUrl('otform/approve')?>",{"id":id,"type" :type},
    function(data){
     if(data.error){
       console.log(data.error);
     } else {
       $(a).attr("disabled","disabled").removeAttr("onclick").addClass("btn-info").removeClass("btn-success").text("Approved");
     }
    },
   "json");
  }
</script>
=======
	*/ ?>

</div>
>>>>>>> 0d38a4930c9763d780173b204ca947d400ef70e6
