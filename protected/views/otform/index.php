<?php
$this->breadcrumbs=array(
	'Otforms',
);

$this->menu=array(
array('label'=>'Create Otform','url'=>array('create')),
array('label'=>'Manage Otform','url'=>array('admin')),
);
?>

<h1>Otforms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
