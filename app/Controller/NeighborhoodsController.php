<?php
App::uses('AppController', 'Controller');
/**
 * Neighborhoods Controller
 *
 * @property Neighborhood $Neighborhood
 */
class NeighborhoodsController extends AppController {

	public $helpers = array('Html','Form','Js');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Neighborhood->recursive = 0;
		$this->set('neighborhoods', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Neighborhood->id = $id;
		if (!$this->Neighborhood->exists()) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		$this->set('neighborhood', $this->Neighborhood->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Neighborhood->create();
			if ($this->Neighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The neighborhood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The neighborhood could not be saved. Please, try again.'));
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
		$this->Neighborhood->id = $id;
		if (!$this->Neighborhood->exists()) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Neighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The neighborhood has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The neighborhood could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Neighborhood->read(null, $id);
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
		$this->Neighborhood->id = $id;
		if (!$this->Neighborhood->exists()) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		if ($this->Neighborhood->delete()) {
			$this->Session->setFlash(__('Neighborhood deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Neighborhood was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * AUTOCOMPLETE
 *
 * @return void
 */	
	public function autoComplete() {
		$this->layout = 'ajax';
		$neighborhoods = $this->Neighborhood->find('all', array(
				'conditions' => array('Neighborhood.name LIKE' => $this->data['Neighborhood']['name'] . '%'),
				'order' => array('Neighborhood.name'),
				'fields' => array('name')
				)
			);
		$this->set('name',$neighborhoods);
	}
}
