 <h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
<h3><?php echo $post['title']; ?></h3>
<small class = "post-date">Posted on:<?php echo $post['created_at']; ?></small><br>
<?php echo  word_limiter($post['body'], 150); ?>
<br><br>
<p><a class="btn btn-info" href="<?php echo site_url('/index.php/posts/'.$post['slug']); ?>">Read more</a></p>
	<?php endforeach; ?>