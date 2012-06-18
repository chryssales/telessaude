<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 */
class EmployeesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		}
		$neighborhoods = $this->Employee->Neighborhood->find('list');
		$this->set(compact('neighborhoods'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Employee->read(null, $id);
		}
		$neighborhoods = $this->Employee->Neighborhood->find('list');
		$this->set(compact('neighborhoods'));
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
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('Employee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
