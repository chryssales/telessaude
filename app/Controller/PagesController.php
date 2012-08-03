<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session','Form','Time','Js');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Link','Support','News','Event');
	
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
	
	public function admin_index(){
		$this->layout = 'telessaude-admin';
	}
	
	
	public function index(){
		
		$links = $this->Link->find('all');
		$supports = $this->Support->find('all');
		$news = $this->News->find('all',array(
			'limit'=>'5',
			'order'=> array('News.date'=>'DESC')));
		$events = $this->Event->find('all', array(
			'limit'=>'5',
			'order'=> array('Event.date'=>'DESC')));
		
		//$this->paginate = array('order'=>array('News.date'=>'asc'));
		$this->set(compact('links','supports','news','events'));
	}
	
	public function apresentacao(){
		
	}
	
	public function contato(){
		
	}
	
	public function equipe(){
		
	}
	
	public function servicos(){
		
	}
	
	public function municipios(){
		
	}
	
	public function eventos(){
		
	}
	
	public function biblioteca(){
		
	}
	
	public function search(){
		$term = $this->request->data['Search']['search'];
		$evento = $this->Event->find('all',
			array(
				'conditions'=> array('Event.name LIKE'=>'%'.$term.'%')
			));	
		$busca = $this->News->find('all',
			array(
				'fields' => array('News.id','News.title','News.date'),
				'conditions'=> array('News.title LIKE'=>'%'.$term.'%'),
				'order' => array('News.date'=>'DESC')
			));
		$this->set(compact('busca','evento'));
	}
	
	public function login(){
		var_dump($this->request->data);exit;
	}
}
