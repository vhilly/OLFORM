<?php
$this->breadcrumbs=array(
	'Otforms',
);
?>

<h1>Otforms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
