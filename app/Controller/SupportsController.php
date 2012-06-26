<?php
App::uses('AppController', 'Controller');
/**
 * Supports Controller
 *
 * @property Support $Support
 */
class SupportsController extends AppController {

	var $layout = 'default-safe';
/**
 * index method
 *
 * @return void
 */
	public function index() {
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
			throw new NotFoundException(__('Invalid support'));
		}
		$this->set('support', $this->Support->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Support->create();
			if ($this->Support->save($this->request->data)) {
				$this->Session->setFlash(__('The support has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The support could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Invalid support'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Support->save($this->request->data)) {
				$this->Session->setFlash(__('The support has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The support could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Support->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Support->id = $id;
		if (!$this->Support->exists()) {
			throw new NotFoundException(__('Invalid support'));
		}
		if ($this->Support->delete()) {
			$this->Session->setFlash(__('Support deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Support was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
