<h2><?= $post['title']; ?></h2>
<div class="row">
	<div class="post-body col-md-12">
	<?= $post['body']; ?>
	</div>
</div>
<div class="row" style="margin-bottom: 50px;">
    <div class="col-xs-12">
    	<div class="btn-group">
    		<?php if ($this->session->userdata('user_id') == $post['user_id']): ?>
    			<a style="margin-right: 5px;" class="btn btn-primary" href="<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>">Edit</a>
				<?= form_open('/posts/delete/'. $post['id']); ?>
				<input type="submit" class="btn btn-danger" value="Delete">
		</form>
    		<?php endif ?>
    	</div>
        
    </div>
</div>
<div class="row">
	<?php if ($post['post_image1'] !== ""): ?>
		<div class="col-md-3">
			<img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image1']; ?>">
		</div>
	<?php endif ?>
	<?php if ($post['post_image2'] !== ""): ?>
		<div class="col-md-3">
			<img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image2']; ?>">
		</div>
	<?php endif ?>
	<?php if ($post['post_image3'] !== ""): ?>
		<div class="col-md-3">
			<img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image3']; ?>">
		</div>
	<?php endif ?>
	<?php if ($post['post_image4'] !== ""): ?>
		<div class="col-md-3">
			<img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image4']; ?>">
		</div>
	<?php endif ?>
</div>
<hr>

