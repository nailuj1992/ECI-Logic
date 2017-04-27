<?php

/**
 * Description of Conector
 *
 * @author Julian Gonzalez Prieto (Avuuna, la Luz del Alba).
 */
class Conector extends CActiveRecord {

    public $conector;

    public function tableName() {
        return 'formula';
    }

    public function rules() {
        return array(
            array('conector', 'required'),
        );
    }

    public function relations() {
        return array();
    }

    public function attributeLabels() {
        return array(
            'conector' => 'Conector',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
