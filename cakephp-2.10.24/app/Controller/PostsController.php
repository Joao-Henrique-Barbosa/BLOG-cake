<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->layout = "ajax";
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id) {
        $this->layout = 'ajax';
        $this->set('post', $this->Post->findById($id));
    }

    public function add() {
        $this->layout = "ajax";
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Your post has been saved.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function edit($id = null) {
        $this->layout = "ajax";
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->findById($id);
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function delete($id) {
        $this->layout = "ajax";
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Flash->success('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}
    