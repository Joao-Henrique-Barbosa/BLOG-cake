<h1>Blog posts</h1>
<a href="#" onclick='add_post();'>Add post</a>
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
            <a href="#" onclick='view_post(<?=$post['Post']['id'];?>);'><?=$post['Post']['title']?></a>
        </td>
        <td>
        <a href="#" onclick='deletar(<?=$post['Post']['id'];?>);'>Delete</a>
            <a href="#" onclick='editar_post(<?=$post['Post']['id'];?>);'>Edit</a>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
<?php endforeach; ?>
</table>