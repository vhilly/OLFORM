<!--<div class="view">-->
<?php 
  $sv=Yii::app()->user->id;
  $name=$sv?$sv:'';
#  if(!$sv)
#   $type="success";
#  else
#   $type="info";
   
  $status=array(0=>'',1=>'info',2=>'info',3=>'success',4=>'');
  $status_d=array(0=>'',1=>'',2=>'',3=>'',4=>'danger');

?>
<?php 
$otFrom = CHtml::encode($data->start_time);
$otTo = CHtml::encode($data->end_time);
$otDiff = strtotime($otTo) - strtotime($otFrom);
$totalHours = floor($otDiff / 3600);
$mins = floor(($otDiff / 60) % 60);
if ($data->status == 0)
  $a = "Waiting for TL/SV Approval"; 
if ($data->status == 1)
  $a = "Waiting for OM Approval"; 
if ($data->status == 2)
  $a = "Waiting for HR Approval"; 
if ($data->status == 3)
  $a = "Approved"; 
if ($data->status == 4)
  $a = "Disapproved";
$user = User::model()->findByPk(Yii::app()->user->id);
?>

  <tr>
    <td><?php echo "{$data->users0->profile->firstname} {$data->users0->profile->lastname}" ;?></td>
    <td><?php echo CHtml::encode($data->start_time); ?></td>
    <td><?php echo CHtml::encode($data->end_time); ?></td>
    <td><?php echo "$totalHours Hr(s) $mins Min(s)."; ?></td>
    <td><?php echo CHtml::encode($data->remarks); ?></td>
    <td><?php echo CHtml::encode($data->date); ?></td>
    <td><?php echo CHtml::encode(isset($data->tl_sv0->profile->firstname) ? $data->tl_sv0->profile->firstname:'')." ".CHtml::encode(isset($data->tl_sv0->profile->lastname) ? $data->tl_sv0->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->om0->profile->firstname) ? $data->om0->profile->firstname:'')." ".CHtml::encode(isset($data->om0->profile->lastname) ? $data->om0->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->hr0->profile->firstname) ? $data->hr0->profile->firstname:'')." ".CHtml::encode(isset($data->hr0->profile->lastname) ? $data->hr0->profile->lastname:''); ?></td>
    <td><?php echo $a; ?></td>
  <?php if(Yii::app()->user->checkAccess('Team Lead') || Yii::app()->user->checkAccess('Supervisor')):?>
    <td>
  <?php
    $approve=0;
    if($data->status ==1)
      $approve =1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Approve' : 'Approved',
        'size' => 'small',
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>$approve?'':'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',1,'.$sv.');
             }
         })'
        ), 
      )
    ); 
    echo " ";
    $approve=0;
    if($data->status ==4)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Disapprove' : 'Disapproved',
        'size' => 'small',
        'type' =>$status_d[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'
          disapprove('.$data->id.',4,'.$sv.');
        '), 
      )
    );
  ?>
  </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('Manager')):?>
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
          'onclick'=>$approve?'':'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',2,'.$sv.');
             }
         })'
        ), 
      )
    ); 
    echo " ";
    $approve=0;
    if($data->status ==4)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Disapprove' : 'Disapproved',
        'size' => 'small',
        'type' =>$status_d[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'
         rdisapprove('.$data->id.',4,'.$sv.');
         '
        ), 
      )
    );
    ?>
  </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('HR Manager')):?>
   <td>
    <?php
    $approve=0;
    if($data->status ==3)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Approve' : 'Approved',
        'size' => 'small',
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>$approve?'':'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',3,'.$sv.');
             }
         })'
        ), 
      )
    ); 
    echo " ";
    $approve=0;
    if($data->status ==4)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Disapprove' : 'Disapproved',
        'size' => 'small',
        'type' =>$status_d[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'
         //  var a = this; js:bootbox.confirm("Are you sure?",
           // function(confirmed){
            // if(confirmed){
             //  approve('.$data->id.',3,'.$sv.');
           //  }
         //})
          disapprove('.$data->id.',4,'.$sv.');
         '
        ), 
      )
    );
    ?>
  </td>
  <?php endif?>
  <td><?php echo CHtml::encode($data->tl_disapproval); ?></td>
  <td><?php echo CHtml::encode($data->om_disapproval); ?></td>
  <td><?php echo CHtml::encode($data->hr_disapproval); ?></td>
  </tr>
<script>
  function approve(id,type,user,reason){
$.ajax({
  type: 'POST',
  url:"<?=Yii::app()->controller->createUrl('otform/approve')?>",
  data: {id:id,type:type,user:<?=$sv?>,reason:reason},
  success: function(){location.reload()},
  dataType: "json",
});
  }

  function disapprove(id,type,user){
    $('#myModal').modal();
    $('#myModal .modal-body').html('<textArea id=txtReason></textArea>');
    $('#myModal .modal-header').html('Reason for Disapproval');
    $('#myModal .saveBtn').click(function(){
      var reason = $('textArea');
      if(!$.trim(reason.val()) || reason.val().length<10){
        var limitMsg=reason.val().length>0 ? 'Atleast more than 10 Characters :)' : '';
        alert('Just Give Me A Reason!\n'+limitMsg);
        return false;
      }else{
        approve(id,type,user,reason.val());
      }
   });
  }
</script>
<?php 
$this->renderPartial('modal');

?>
