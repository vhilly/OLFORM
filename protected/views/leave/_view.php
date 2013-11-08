<?php
/* @var $this LeaveController */
/* @var $data Leave */
$sv=Yii::app()->user->id;
$name=$sv?$sv:'';

$user = User::model()->findByPk(Yii::app()->user->id);
$status=array(0=>'',1=>'info',2=>'success',3=>'');
$status_d=array(0=>'',1=>'',2=>'',3=>'danger');
$uid = User::model()->findByPk(Yii::app()->user->id);
?>
       <?php #echo ucwords(strtolower($user->profile->department_id));?>
  <tr>
    <td><?php echo "{$data->users0->profile->firstname} {$data->users0->profile->lastname}" ;?></td>
    <td><?php echo CHtml::encode($data->date_filed);?></td>
    <td><?php echo "{$data->users0->profile->position_id}" ;?></td>
    <td><?php echo "{$data->leaveType->name}" ;?></td>
    <td><?php echo CHtml::encode(ucwords(strtolower($data->reason)));?></td>
    <td><?php echo '('.CHtml::encode($data->start_date) .') - ('. CHtml::encode($data->end_date).')';?></td>
    <td><?php echo "";?></td>
    <td><?php echo "";?></td>
    <td><?php echo "";?></td>
    <td><?php echo "";?></td>
    <td><?php echo "";?></td>
    <td>
      <?php
        $approve=0;
        if($data->status ==0)
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
        if($data->status ==1)
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
    <td>
      <?php
        $approve=0;
        if($data->status ==0)
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
        if($data->status ==1)
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
    <td>
      <?php
        $approve=0;
        if($data->status ==0)
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
        if($data->status ==1)
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
    <td>
      <?php
        $approve=0;
        if($data->status ==0)
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
        if($data->status ==1)
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

