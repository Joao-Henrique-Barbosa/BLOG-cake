<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo $post['Post']['title']?></h1>

<p><?php echo $post['Post']['body']?></p>

<p><small>Created: <?php echo $post['Post']['created']?></small></p>

<a href="#" onclick="add_comment(<?=$post['Post']['id'];?>);">Deixe seu comentario</a><br></br>
<a href="#" onclick="show_comment(<?=$post['Post']['id'];?>);">Ver comentários deste post</a>
