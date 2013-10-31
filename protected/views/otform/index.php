<?php
$this->breadcrumbs=array(
	'Otforms',
);
<<<<<<< HEAD
=======

$this->menu=array(
array('label'=>'Create Otform','url'=>array('create')),
array('label'=>'Manage Otform','url'=>array('admin')),
);
>>>>>>> 0d38a4930c9763d780173b204ca947d400ef70e6
?>

<h1>Otforms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
