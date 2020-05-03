<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array(
		'nazwisko' => array('rule' => 'notBlank'),
		'etat' => array('rule' => 'notBlank'),
		'placa_pod' => array(
			'placa_podRule-1' => array(
				'rule' => array('comparison', '>=', 0),
				'message' => 'Placa_pod must be greater than 0.'),
			'placa_podRule-2' => array(
				'rule' => array('comparison', '=<', 2000),
				'message' => 'Placa_pod must be lesser than 2000.')
		)
	);
}
