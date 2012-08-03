<?php
App::uses('AppController', 'Controller');
/**
 * Links Controller
 *
 * @property Link $Link
 */
class LinksController extends AppController {

	var $layout = 'telessaude-admin';
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Link->recursive = 0;
		$this->set('links', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Link->id = $id;
		if (!$this->Link->exists()) {
			throw new NotFoundException(__('Link inválido'));
		}
		$this->set('link', $this->Link->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Link->create();
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('O Link foi cadastrado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível cadastrar o Link. Por favor, tente novamente.'));
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
		$this->Link->id = $id;
		if (!$this->Link->exists()) {
			throw new NotFoundException(__('Link inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Link->save($this->request->data)) {
				$this->Session->setFlash(__('O Link foi atualizado com sucesso!'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não foi possível autalizar o Link. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Link->read(null, $id);
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
		$this->Link->id = $id;
		if (!$this->Link->exists()) {
			throw new NotFoundException(__('Link inválido'));
		}
		if ($this->Link->delete()) {
			$this->Session->setFlash(__('Link excluído'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('O Link não foi excluído'));
		$this->redirect(array('action' => 'index'));
	}
	
}
