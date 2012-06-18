<?php
class User extends AppModel{
	
	public $name = 'User';
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Nome de usuario requerido.'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Senha requerida.'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin','author')),
				'message' => 'Por favor, entre um papel valido',
				'allowEmpty' => false
			)
		)
	);
}
?>