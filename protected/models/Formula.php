<?php

/**
 * This is the model class for table "formula".
 *
 * The followings are the available columns in table 'formula':
 * @property integer $id
 * @property string $nombre
 * @property string $formula
 */
class Formula extends CActiveRecord {

    public static $true = "true";
    public static $false = "false";

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'formula';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nombre, formula', 'required'),
            array('nombre', 'length', 'max' => 175),
            array('formula', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nombre, formula', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nombre' => 'Nombre',
            'formula' => 'Formula',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('formula', $this->formula, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Formula the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function getRandom() {
        $max = self::model()->count() - 1;
        $offset = rand(0, $max);
        return self::model()->find(array('offset' => $offset));
    }

}
