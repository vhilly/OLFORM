<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
  </head>

<body>
<?php
  $this->widget('bootstrap.widgets.TbNavbar', array(
    'brand' => 'Imperium',
    'fixed'=>'',
    'items' => array(
      array(
        'class' => 'bootstrap.widgets.TbMenu',
        'items' => array(
          array('label'=>'Home','icon'=>'home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest,'active'=>false),
        )
      ),
      array(
        'class' => 'bootstrap.widgets.TbMenu',
        'htmlOptions' => array('class' => 'pull-right'),
        'encodeLabel'=>false,
        'items' => array(
          '...',
          array('label'=>'','icon'=>'cogs','url'=>'#','visible'=>!Yii::app()->user->isGuest,'active'=>false),
        )
      ),
   )
 ));


?>

<div class="container" id="page">
  <center>
<?php
  $msgType='';
  if(Yii::app()->user->hasFlash("success"))
   $msgType='success';
  if(Yii::app()->user->hasFlash("error"))
   $msgType='error';
  if(Yii::app()->user->hasFlash("info"))
   $msgType='info';
  $this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true, // display a larger alert block?
    'fade'=>true, // use transitions?
    'closeText'=>'x', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
            $msgType=>array('block'=>true, 'fade'=>true, 'closeText'=>'x'), // success, info, warning, error or danger
    ),
  ));
?>
  </center>
        <?php echo $content; ?>

</div><!-- page -->

</body>
</html>
