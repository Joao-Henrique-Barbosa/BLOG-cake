<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<a href="#" onclick='add_post();'>Adc post</a>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
            <a href="#" onclick='view_post(<?=$post['Post']['id'];?>);'>this post</a>
        </td>
        <td>
        <a href="#" onclick='deletar(<?=$post['Post']['id'];?>);'>Deletar</a>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?')
                
            )?>
            <a href="#" onclick='editar_post(<?=$post['Post']['id'];?>);'>Edit</a>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
<?php endforeach; ?>
</table>