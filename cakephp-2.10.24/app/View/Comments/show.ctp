
<?php foreach ($comments as $comment):
    if($comment['Comment']['post_id'] == $post_id){
        ?><tr>
            <td>
            <?php echo $comment['Comment']['comment_name']; ?>
            </td>
            <td>
            <?php echo $comment['Comment']['comment_text']; ?>
            </td>
            <td>
            <?php echo $comment['Comment']['post_id']; ?>
            </td>
        </tr><?php
    }
endforeach; ?>

