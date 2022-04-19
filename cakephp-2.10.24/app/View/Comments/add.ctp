<?php/*
echo $this->Form->create('Comment');
echo $this->Form->input('comment_name' );
echo $this->Form->input('comment_text', array('rows' => '3'));
echo $this->Form->input('post_id',array(
    'type' => 'select',
    'options' => $postid
));*/
?>

<form action="/cake_2_0/cakephp-2.10.24/comments/add" id="CommentAddForm" method="post" accept-charset="utf-8" _lpchecked="1">
    <div style="display:none;">
        <input type="hidden" name="_method" value="POST">
    </div>
    <div class="input text required">
        <label for="CommentCommentName">Comment Name</label>
            <input name="data[Comment][comment_name]" maxlength="30" type="text" id="CommentCommentName" required="required">
        </div>
        <div class="input textarea required">
            <label for="CommentCommentText">Comment Text</label>
                <textarea name="data[Comment][comment_text]" rows="3" cols="30" id="CommentCommentText" required="required"></textarea>
        </div>

    <div class="input select">
        <input type='hidden' name="data[Comment][post_id]" id="CommentPostId" value='<?=$post_id?>'>
    </div>
</form>