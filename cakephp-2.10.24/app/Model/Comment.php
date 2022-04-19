<?php
class Comment extends AppModel {
    public $name = 'Comment';
    public $belongsTo = array(
        'Post' => array(
            'foreign key' => 'post_id'
        )
    );
    public $validate = array(
        'comment_name' => array(
            'rule' => 'notBlank'
        ),
        'comment_text' => array(
            'rule' => 'notBlank'
        )
    );
}