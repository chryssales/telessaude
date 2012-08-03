<?php
App::uses('AppModel', 'Model');
/**
 * News Model
 *
 */
class News extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	
	public function beforeSave($options) {
		$data = $this->data['News']['date'];
		if(strpos($data,"/" ) == false) {
		return;	
		}
		$dI = explode("/", $data);	
		$data = $dI[2].'-'.$dI[1].'-'.$dI[0];
		$this->data['News']['date'] = $data;
	}
}
