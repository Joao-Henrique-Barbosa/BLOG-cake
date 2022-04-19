<table>
<a href="#" onclick='add_comment();'>Add</a><br></br>
<?php foreach ($comments as $comment): ?>
    <tr>
        <td><?php echo $comment['Comment']['comment_name']; ?></td>
        <td><?php echo $comment['Comment']['comment_text']; ?></td>
        <td><?php echo $comment['Comment']['post_id']; ?></td>
        <td><?php echo $comment['Comment']['id']; ?></td>

    </tr>
<?php endforeach; ?>
<a href="#" onclick='show_comment(4);'>show</a>

</table>