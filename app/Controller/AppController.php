<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	var $components = array('Auth','Session','Upload');
	
	public $uses = array('User');
	
	var $helpers = array('Html','Form','Session','Paginator');
	
	var $filepath = '';
	
	function beforeFilter(){
			
		$this->Auth->loginAction = array(
			'controller' => 'users',
			'action' => 'login',
			'admin' => true
		);
		
		$this->Auth->loginRedirect = array(
			'controller' => 'pages',
			'action' => 'index',
			'admin' => true
		);
		
		$this->Auth->logoutRedirect = array(
			'controller' => 'users',
			'action'=> 'login',
			'admin'=> true
		);
		
		$u = $this->Auth->user();
        if($u != null) {
        	$user = $this->User->read(null, $u['id']);
        	
        	$this->set(compact('user'));
        }
		
		if(!(isset($this->params['admin'])))
		{
			$this->Auth->allow('*');
		}/*else{
			$this->Auth->deny('*');
		}*/
	}
	
	/*function isAuthorized(){
		return true;
	}*/
	
	function uploadImage($image, $filepath, $size){
		
		$this->Upload->upload($image);
		$imgName = date('dmY_His');
		$this->Upload->file_new_name_body = $imgName;
		$this->Upload->image_resize = true;
		$this->Upload->image_x = $size;
		$this->Upload->image_ratio_y = true;
		$this->Upload->jpeg_quality = 70;
		$this->Upload->allowed = array('image/jpeg','image/jpg','image/gif','image/JPG','image/PNG','image/png');
		$this->Upload->process('img'.DS.$filepath.DS);
		if ($this->Upload->processed) {
			$this->Upload->clean();
		} else {
			$this->erro = $this->Upload->error;
		}
		return $imgName.'.'.$this->Upload->file_src_name_ext;
	}
	
	/**
	 * 
	 * Função que remove uma imagem do servidor
	 * @param nome da imagem
	 */
	function __removeImage($image, $filepath) {
		
		$image_path = IMAGES.$filepath.DS.$image;

		return $this->__removeFile($image_path);
	}
	
	/**
	 * 
	 * Função que remove um arquivo do servidor
	 * @param caminho para o arquivo no servidor
	 */
	function __removeFile($path_file) {
		// Teste para saber se existe o arquivo e para evitar Warning devido os diretorios localizadores (ponto e ponto ponto)
		if (is_file($path_file) && (substr($path_file, -1) != '.' && substr($path_file, -2) != '..')) {
			return unlink($path_file);
		} else {
			return false;
		}
	}
	
	function handleImage($update=false, $size=300){
		
		$model = $this->uses[0];
		
		// Codigo do Add	
		if(!$update)
		{
			if(!empty($this->request->data[$model]['image']['name'])){
				$imagem = $this->uploadImage($this->request->data[$model]['image'], $this->filepath, $size);
				
				if($imagem){
					$this->request->data[$model]['image'] = $imagem;
				}else{
					$this->Session->setFlash('Erro ao fazer upload');
					return;
				}
			}else{
				$imagem = '';
				$this->request->data[$model]['image'] = '';
			}
			
			return $imagem;
		}else{
		
			// Código do Edit
			if(empty($this->request->data[$model]['image']['name']))
			{
				$this->request->data[$model]['image'] = $this->request->data[$model]['prevImagem'];
			}else{
				$imagem = $this->uploadImage($this->request->data[$model]['image'], $this->filepath, $size);
				if($imagem){
					$this->request->data[$model]['image'] = $imagem;
					$this->__removeImage($this->request->data[$model]['prevImagem'], $this->filepath);
				}else{
					$this->Session->setFlash('Erro ao fazer upload');
					$this->request->data[$model]['image'] = $this->request->data[$model]['prevImagem'];
					return;
				}
				
			}
		}
	}
}
