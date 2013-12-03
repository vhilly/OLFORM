<?php
/* @var $this LeaveController */
/* @var $data Leave */
$sv=Yii::app()->user->id;
$name=$sv?$sv:'';

$user = User::model()->findByPk(Yii::app()->user->id);
$status=array(0=>'',1=>'info',2=>'info',3=>'success',4=>'');
$status_d=array(0=>'',1=>'',2=>'',3=>'',4=>'danger');
$uid = User::model()->findByPk(Yii::app()->user->id);
if ($data->status == 0)
  $a = "Waiting for TL/SV Approval"; 
if ($data->status == 1)
  $a = "Waiting for TL/SV Approval"; 
if ($data->status == 2)
  $a = "Waiting for Operation Manager's Aprroval"; 
if ($data->status == 3)
  $a = "Waiting for HR Manager's Approval";
if ($data->status == 4)
  $a = "Disapproved";
$user = User::model()->findByPk(Yii::app()->user->id);
#pid = $data->users0->profile->position_id;
$pid  = $user->profile->position_id;
$pos = Position::model()->findByPk($pid);
?>
       <?php #echo ucwords(strtolower($user->profile->department_id));?>
  <tr>
    <td><?php echo "{$data->users0->profile->firstname} {$data->users0->profile->lastname}" ;?></td>
    <td><?php echo CHtml::encode($data->date_filed);?></td>
    <td><?php echo $pos->name;?></td>
    <td><?php echo "{$data->leaveType->name}" ;?></td>
    <td><?php echo CHtml::encode(ucwords(strtolower($data->reason)));?></td>
    <td><?php echo '('.CHtml::encode($data->start_date) .') - ('. CHtml::encode($data->end_date).')';?></td>
    <td><?php echo CHtml::encode(isset($data->sv10->profile->firstname) ? $data->sv10->profile->firstname:'')." ".CHtml::encode(isset($data->sv10->profile->lastname) ? $data->sv10->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->sv20->profile->firstname) ? $data->sv20->profile->firstname:'')." ".CHtml::encode(isset($data->sv20->profile->lastname) ? $data->sv20->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->om0->profile->firstname) ? $data->om0->profile->firstname:'')." ".CHtml::encode(isset($data->om0->profile->lastname) ? $data->om0->profile->lastname:''); ?></td>
    <td><?php echo CHtml::encode(isset($data->hrm0->profile->firstname) ? $data->hrm0->profile->firstname:'')." ".CHtml::encode(isset($data->hrm0->profile->lastname) ? $data->hrm0->profile->lastname:''); ?></td>
    <td><?php echo $a;?></td>
  <?php if(Yii::app()->user->checkAccess('Team Lead') || Yii::app()->user->checkAccess('Supervisor')):?>
    <td>
      <?php
        //supervisor 1
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
              'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
                function(confirmed){
                 if(confirmed){
                   approve('.$data->id.',a,1,'.$sv.');
                 }
             })'
            ),
          )
        );
      echo "<br>";
      echo "<br>";
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
              'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
                function(confirmed){
                 if(confirmed){
                   approve('.$data->id.',a,4,'.$sv.');
                 }
             })'
            ),
          )
        );
  ?>
    </td>
    <td>
      <?php
        //supervisor 2
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
              'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
                function(confirmed){
                 if(confirmed){
                   approve('.$data->id.',a,2,'.$sv.');
                 }
             })'
            ),
          )
        );
      echo "<br>";
      echo "<br>";
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
              'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
                function(confirmed){
                 if(confirmed){
                   approve('.$data->id.',a,4,'.$sv.');
                 }
             })'
            ),
          )
        );
  ?>
    </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('Manager')):?>
    <td>
      <?php
        //Operations Manager
        $approve=0;
        if($data->status ==2)
          $approve =1;
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
                   approve('.$data->id.',a,3,'.$sv.');
                 }
             })'
            ),
          )
        );
      echo "<br>";
      echo "<br>";
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
              'onclick'=>'var a = this; js:bootbox.confirm("Are you sure?",
                function(confirmed){
                 if(confirmed){
                   approve('.$data->id.',a,4,'.$sv.');
                 }
             })'
            ),
          )
        );
  ?>
    </td>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('HR Manager')):?>
    <td>
      <?php
        //HR Manager
        $approve=0;
        if($data->status ==3)
          $approve =1;
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
                   approve('.$data->id.',a,3,'.$sv.');
                 }
             })'
            ),
          )
        );
      echo "<br>";
      echo "<br>";
        $approve=0;
        if($data->status ==4)
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
                   approve('.$data->id.',a,4,'.$sv.');
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
  function approve(id,a,type,user){
$.ajax({
  type: 'POST',
  url:"<?=Yii::app()->controller->createUrl('leave/approve')?>",
  data: {id:id,type:type,user:<?=$sv?>},
  success: function(){location.reload()},
  dataType: "json",
});
  }
</script>

