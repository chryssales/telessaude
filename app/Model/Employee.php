<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property Neighborhood $Neighborhood
 */
class Employee extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Neighborhood' => array(
			'className' => 'Neighborhood',
			'foreignKey' => 'neighborhood_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
