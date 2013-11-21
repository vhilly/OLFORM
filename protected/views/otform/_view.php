<!--<div class="view">-->
<?php 
  $sv=Yii::app()->user->id;
  $name=$sv?$sv:'';
#  if(!$sv)
#   $type="success";
#  else
#   $type="info";
   
  $status=array(0=>'',1=>'info',2=>'success',3=>'');
  $status_d=array(0=>'',1=>'',2=>'',3=>'danger');

?>
<?php 
$otFrom = CHtml::encode($data->start_time);
$otTo = CHtml::encode($data->end_time);
$otDiff = strtotime($otTo) - strtotime($otFrom);
$totalHours = floor($otDiff / 3600);
$mins = floor(($otDiff / 60) % 60);
if ($data->status == 0)
  $a = "Waiting for TL's Approval"; 
if ($data->status == 1)
  $a = "Waiting for SV's Approval"; 
if ($data->status == 2)
  $a = "Approved"; 
if ($data->status == 3)
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
    <td><?php echo CHtml::encode(isset($data->tl0->profile->firstname) ? $data->tl0->profile->firstname:'')." ".CHtml::encode(isset($data->tl0->profile->lastname) ? $data->tl0->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->sv0->profile->firstname) ? $data->sv0->profile->firstname:'')." ".CHtml::encode(isset($data->sv0->profile->lastname) ? $data->sv0->profile->lastname:''); ?></td>
    <td><?php echo $a; ?></td>
  <?php if(Yii::app()->user->checkAccess('Team Lead')):?>
    <td>
  <?php
    $approve=0;
    if($data->status ==0)
      $approve =1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Approved' : 'Approve',
        'size' => 'small',
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,1,'.$sv.');
             }
         })'
        ), 
      )
    ); 
    echo " ";
    $approve=0;
    if($data->status ==1)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Disapprove' : 'Disapproved',
        'size' => 'small',
        'type' =>$status_d[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,3,'.$sv.');
             }
         })'
        ), 
      )
    );
  ?>
  </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('Supervisor')):?>
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
               approve('.$data->id.',a,2,'.$sv.');
             }
         })'
        ), 
      )
    ); 
    echo " ";
    $approve=0;
    if($data->status ==2)
      $approve=1;
    $this->widget(
      'bootstrap.widgets.TbButton',
      array(
        'label' => !$approve ? 'Disapproved' : 'Disapprove',
        'size' => 'small',
        'type' =>$status_d[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,3,'.$sv.');
             }
         })'
        ), 
      )
    );
    ?>
  </td>
  <?php endif?>
  <td><?php echo ""; ?></td>
  </tr>
<script>
  function approve(id,a,type,user){
$.ajax({
  type: 'POST',
  url:"<?=Yii::app()->controller->createUrl('otform/approve')?>",
  data: {id:id,type:type,user:<?=$sv?>},
  success: function(){location.reload()},
  dataType: "json",
});
  }
</script>
