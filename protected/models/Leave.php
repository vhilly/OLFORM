<?php

/**
 * This is the model class for table "leave".
 *
 * The followings are the available columns in table 'leave':
 * @property integer $id
 * @property integer $employee_id
 * @property integer $leave_type_id
 * @property string $reason
 * @property string $start_date
 * @property string $end_date
 * @property string $date_filed
 * @property integer $sv1
 * @property integer $sv2
 * @property integer $om
 * @property integer $hrm
 * @property string $remarks
 * @property string $create_date
 * @property integer $days_with_pay
 * @property integer $days_without_pay
 * @property integer $others
 *
 * The followings are the available model relations:
 * @property Users $employee
 * @property Leave $leaveType
 * @property Leave[] $leaves
 */
class Leave extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Leave the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'leave';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, leave_type_id, start_date, end_date, date_filed','required'),
			array('employee_id, leave_type_id, sv1, sv2, om, hrm, days_with_pay, days_without_pay, others', 'numerical', 'integerOnly'=>true),
			array('reason, remarks', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employee_id, leave_type_id, reason, start_date, end_date, date_filed, sv1, sv2, om, hrm, remarks, create_date, days_with_pay, days_without_pay, others', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'leaveType' => array(self::BELONGS_TO, 'LeaveType', 'leave_type_id'),
			'users0' => array(self::BELONGS_TO, 'User', 'employee_id'),
			'profile' => array(self::BELONGS_TO, 'Profiles', 'position_id'),
      'position' => array(self::BELONGS_TO, 'Position', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee ID',
			'leave_type_id' => 'Type of Leave',
			'reason' => 'Specify',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'date_filed' => 'Date of Filing',
			'sv1' => 'Supervisor1',
			'sv2' => 'Supervisor2',
			'om' => 'Operations Manager',
			'hrm' => 'Hr Manager',
			'remarks' => 'Disapproved due to:',
			'create_date' => 'Create Date',
			'days_with_pay' => 'Days With Pay',
			'days_without_pay' => 'Days Without Pay',
			'others' => 'Others',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('leave_type_id',$this->leave_type_id);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('date_filed',$this->date_filed,true);
		$criteria->compare('sv1',$this->sv1);
		$criteria->compare('sv2',$this->sv2);
		$criteria->compare('om',$this->om);
		$criteria->compare('hrm',$this->hrm);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('days_with_pay',$this->days_with_pay);
		$criteria->compare('days_without_pay',$this->days_without_pay);
		$criteria->compare('others',$this->others);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
