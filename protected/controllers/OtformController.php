<?php

class OtformController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
  'rights',
#'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
/*
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update','approve'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
*/
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$this->layout='//layouts/main';
$this->render('view',array(
'model'=>$this->loadModel($id),
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Otform;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Otform']))
{
$model->attributes=$_POST['Otform'];
$user = Yii::app()->user->id;
$model->employee_id=$user;
if($model->save()){
  $to='lyn@imperium.ph';
  $from='olform@imperium.ph';
  $subject='OT Online Application';
  $message="Sir/Madam,<br>Churba is applying for OT and is asking for your approval.<br>"
    .CHtml::link('Click Here For Details',$this->createAbsoluteUrl('otform/view',array('id'=>$model->id)))."<br>OLFORM ADMIN";
  if(!$this->mailsend($to,$from,$subject,$message))
     Yii::app()->user->setFlash('error', '<center>'.Yii::t('app','Unable To send Mail').'<center>');
  $this->redirect(array('view','id'=>$model->id));
}
}

$this->render('create',array(
'model'=>$model,
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Otform']))
{
$model->attributes=$_POST['Otform'];
if($model->save())
$this->redirect(array('view','id'=>$model->id));
}

$this->render('update',array(
'model'=>$model,
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request
$this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
  $criteria=array();
  $this->layout = "//layouts/main";
 //per roles index view  
  $show_all=false;
  if(Yii::app()->user->checkAccess('Supervisor') || Yii::app()->user->checkAccess('Team Lead')){
    $show_all=true;
  }

  if(!$show_all){
    $criteria=new CDbCriteria(array(                    
        'condition'=>'employee_id='.Yii::app()->user->id
    ));
  }
 //
$dataProvider=new CActiveDataProvider('Otform',array('criteria'=>$criteria));
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Otform('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Otform']))
$model->attributes=$_GET['Otform'];

$this->render('admin',array(
'model'=>$model,
));
}

public function actionApprove ()
{
  $error=0;
  $id=isset($_POST['id']) ? $_POST['id']:'3233';
  $type=isset($_POST['type']) ? $_POST['type']:'';
  $user=isset($_POST['user']) ? $_POST['user']:'';
  $otform=Otform::model()->findByPk($id);
    
  if($otform){
    $otform->status=$type;
    if(Yii::app()->user->checkAccess('Supervisor'))
      $otform->sv=$user;
    if(Yii::app()->user->checkAccess('Team Lead'))
      $otform->tl=$user;
  #    $otform->tl=Yii::app()->user->id;
    if($otform->save())
      $error++;
  }else{
      $error++;
  }
  echo json_encode(compact('error'));
}

/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Otform::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}

/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='otform-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
public function mailsend($to,$from,$subject,$message){
        $mail=Yii::app()->Smtpmail;
        $mail->SetFrom($from, 'BRITNEY SPEARS');
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->AddAddress($to, "");
        if(!$mail->Send())
          return false;
        else 
          return true;
    }
}
