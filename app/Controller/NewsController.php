<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 */
class NewsController extends AppController {

	var $layout = 'telessaude-admin';
	
	var $paginate = array(
		'order'=>array('News.date'=>'desc')
	);
	
	var $filepath = 'news';
	
	public $helpers = array('Html','Time','Fck');
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}
	
	public function listar(){
		$this->layout = 'default';
		$this->set('news',$this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'default';
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Notícia inválida'));
		}
		$this->set('news', $this->News->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->News->create();
			
			$imagem = $this->handleImage();
			
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('A Notícia foi cadastrada com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível cadastrar a Notícia. Por favor, tente novamente.'));
				if($imagem != ''){
					$this->__removeImage($imagem, $this->filepath);
				}
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Notícia inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			// Upload da Imagem
			$imagem = $this->handleImage(true);
			
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('A Notícia foi atualizada com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível atualizar a Notícia. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->News->read(null, $id);
			$this->request->data[$this->uses[0]]['filepath'] = $this->filepath;
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Notícia inválida'));
		}
		if ($this->News->delete()) {
			$this->Session->setFlash(__('Notícia excluída'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('A Notícia não foi excluída'));
		$this->redirect(array('action' => 'index'));
	}
}
