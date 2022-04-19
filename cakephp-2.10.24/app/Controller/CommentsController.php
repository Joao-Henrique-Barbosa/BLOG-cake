<?php
class CommentsController extends AppController {
    public $helpers = array('Html', 'Form','Flash');
    public function index() {
        $this->layout = "ajax";
        $this->set('comments', $this->Comment->find('all'));
    }

    public function add($post_id = null) {
        $this->layout = "ajax";
        if ($this->request->is('post')) {
            $this->Comment->save($this->request->data);      
        }
        $this->set('post_id', $post_id);        
    }

    public function show($post_id = null) {
        $this->layout = "ajax";
        $this->set('comments', $this->Comment->find('all'));
        $this->set('post_id', $post_id);
    }
}

