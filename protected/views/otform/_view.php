<!--<div class="view">-->
<?php 
  $sv=Yii::app()->user->id;
  $name=$sv?$sv:'';
  if(!$sv)
   $type="success";
  else
   $type="info";
   
  $status=array(0=>'',1=>$type,2=>'success',3=>'danger');

?>
<?php
/* $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => $name,
        'headerIcon' => 'icon-th-list',
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);*/
?>

<?php 
$otFrom = CHtml::encode($data->start_time);
$otTo = CHtml::encode($data->end_time);
$otDiff = strtotime($otTo) - strtotime($otFrom);
$totalHours = floor($otDiff / 3600);
$mins = floor(($otDiff / 60) % 60);
if ($data->status == 0)
  $a = "Pending"; 
if ($data->status == 1)
  $a = "TL Approved"; 
if ($data->status == 2)
  $a = "SV Approved"; 
if ($data->status == 3)
  $a = "Disapproved";
$user = User::model()->findByPk(Yii::app()->user->id);
?>

  <tr>
    <td><?php echo ucwords(strtolower($user->profile->firstname)) . ' ' . ucwords(strtolower($user->profile->lastname));?></td>
    <td><?php echo CHtml::encode($data->start_time); ?></td>
    <td><?php echo CHtml::encode($data->end_time); ?></td>
    <td><?php echo "$totalHours Hr(s) $mins Min(s)."; ?></td>
    <td><?php echo CHtml::encode($data->remarks); ?></td>
    <td><?php echo CHtml::encode($data->date); ?></td>
    <td><?php echo CHtml::encode($data->tl); ?></td>
    <td><?php echo CHtml::encode($data->sv); ?></td>
    <td><?php echo CHtml::encode($data->status); ?></td>
    <td><?php echo $a; ?></td>
  <?php if(Yii::app()->user->checkAccess('Supervisor')):?>
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
               approve('.$data->id.',a,1);
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
        'label' => !$approve ? 'Disapproved' : 'Disapprove',
        'size' => 'small',
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,3);
             }
         })'
        ), 
      )
    );
  ?>
  </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('Team Lead')):?>
   <td>
    <?php
    $approve=0;
    if($data->status ==1)
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
               approve('.$data->id.',a,2);
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
        'type' =>$status[$data->status],
        'htmlOptions'=> array(
          'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
            function(confirmed){
             if(confirmed){
               approve('.$data->id.',a,3);
             }
         })'
        ), 
      )
    );
    ?>
  </td>
  <?php endif?>
  </tr>
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
