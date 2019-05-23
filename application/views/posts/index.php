<h2><?= $title ?></h2>
<br><br>
<?php foreach ($posts as $post) : ?>
	<h3><?= $post['title']; ?></h3>
	<br>
	<p><a class="btn btn-primary" href="<?= site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
	<hr>
<?php endforeach; ?>
<div class="pagination-links">
	<?php echo $this->pagination->create_links(); ?>
</div>
