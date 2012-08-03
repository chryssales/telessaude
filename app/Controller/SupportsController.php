<?php
App::uses('AppController', 'Controller');
/**
 * Supports Controller
 *
 * @property Support $Support
 */
class SupportsController extends AppController {

	var $layout = 'telessaude-admin';
	
	var $filepath = 'supports';
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Support->recursive = 0;
		$this->set('supports', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Apoio inválido'));
		}
		$this->set('support', $this->Support->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		
		if ($this->request->is('post')) {
			$this->Support->create();
			
			// Upload da Imagem
			$imagem = $this->handleImage();
			
			if ($this->Support->save($this->request->data)) {
				$this->Session->setFlash(__('O apoio foi cadastrado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível cadastrar o Apoio. Por favor, tente novamente.'));
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
		
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Apoio inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			
			
			$imagem = $this->handleImage(true);
			
			if ($this->Support->save($this->request->data)) {
				$this->Session->setFlash(__('O Apoio foi atualizado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível atualizar o Apoio.'));
			}
		} else {
			$this->request->data = $this->Support->read(null, $id);
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
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Apoio inválido'));
		}
		if ($this->Support->delete()) {
			$this->Session->setFlash(__('Apoio excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O Apoio não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
}
