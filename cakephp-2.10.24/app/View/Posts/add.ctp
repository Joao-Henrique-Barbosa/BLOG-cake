<h1>Add Post</h1>
<?php
/*
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save post');
*/
?>

<!DOCTYPE html>
    <form id="post">
        <label for="title">title</label><br>
        <input type="text" name="data[Post][title]" id="title"/><br><br>

        <label for="body">body</label><br>
        <textarea name="data[Post][body]" id="body"></textarea><br><br>
    </form>
</html>
