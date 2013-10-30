<?php

/**
 * This is the model class for table "otform".
 *
 * The followings are the available columns in table 'otform':
 * @property integer $id
 * @property integer $employee_id
 * @property string $start_time
 * @property string $end_time
 * @property integer $total_hours
 * @property string $remarks
 * @property string $date
 * @property string $date_submitted
 * @property integer $tl
 * @property integer $sv
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Employee $tl0
 * @property Employee $sv0
 * @property Employee $employee
 */
class Otform extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'otform';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date,start_time, end_time,remarks', 'required'),
			array('employee_id, total_hours, tl, sv, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, start_time, end_time, total_hours, remarks, date, date_submitted, tl, sv, status', 'safe', 'on'=>'search'),
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
			'tl0' => array(self::BELONGS_TO, 'Employee', 'tl'),
			'sv0' => array(self::BELONGS_TO, 'Employee', 'sv'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'start_time' => 'From',
			'end_time' => 'End Time',
			'total_hours' => 'Total Hours',
			'remarks' => 'Remarks',
			'date' => 'Date',
			'date_submitted' => 'Date Submitted',
			'tl' => 'Tl',
			'sv' => 'Sv',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('total_hours',$this->total_hours);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('date_submitted',$this->date_submitted,true);
		$criteria->compare('tl',$this->tl);
		$criteria->compare('sv',$this->sv);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Otform the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
