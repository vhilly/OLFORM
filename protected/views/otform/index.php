<?php
$this->breadcrumbs=array(
	'Otforms',
);
?>

<h1>Submitted O.T. Form/s</h1>

<?php 
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'label' => 'Apply For New O.T',
        'size' => 'large',
        'type' => 'info',
        'url' => Yii::app()->createUrl('otform/create')
    )
);
?>
<br>
<br>
<?php
 $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => 'List',
        'headerIcon' => 'icon-th-list',
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);
?>

<table class="table table-stripped table-bordered" >
  <tr>
	  <th>Name</th>
	  <th>Start Time</th>
	  <th>End Time</th>
	  <th>Total Hours</th>
    <th>Remarks</th>
	  <th>Date</th>
	  <th>Team Lead</th>
	  <th>Supervisor</th>
	  <th>Status</th>
    <?php if(Yii::app()->user->checkAccess('Team Lead')):?>
	  <th>Team Lead's Approval</th>
    <?php endif?>
    <?php if(Yii::app()->user->checkAccess('Supervisor')):?>
	  <th>Supervisor's Approval</th>
    <?php endif?>
	  <th>Disapproval Reason</th>
  </tr>
<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
</table>
<?php $this->endWidget(); ?>

