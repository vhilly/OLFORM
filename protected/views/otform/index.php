<?php
$this->breadcrumbs=array(
	'Otforms',
);
?>

<h1>Submitted O.T Form/s</h1>

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

$this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
