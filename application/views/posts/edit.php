<h2><?= $title;  ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>

	<input type="hidden" name="id" value="<?= $post['id']; ?>">
  <div class="form-group">
  	<br><br>
    <label>Title</label>
    <input type="text" class="form-control" value="<?= $post['title']; ?>" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?= $post['body']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <div class="btn-group">
    <button style="margin-right: 10px;" type="submit" class="btn btn-primary">Submit</button>
    <button  class="btn btn-secondary"><a href="<?= base_url() ?>posts">Cancle</a></button>
  </div>
</form>
<div class="row" style="padding-bottom: 100px;">
  <?php if ($post['post_image1'] !== ""): ?>
    <div class="col-md-3">
      <img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image1']; ?>">
      <?= form_open('/posts/delete_image/'. $post['id'].'/'. $post['post_image1']); ?>
      <input type="submit" class="btn btn-danger" value="Delete" style="width: 100%; margin-top: 10px;">
    </form>
    </div>
  <?php endif ?>
  <?php if ($post['post_image2'] !== ""): ?>
    <div class="col-md-3">
      <img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image2']; ?>">
      <?= form_open('/posts/delete_image/'. $post['id'].'/'. $post['post_image1']); ?>
      <input type="submit" class="btn btn-danger" value="Delete" style="width: 100%; margin-top: 10px;">
    </form>
    </div>
  <?php endif ?>
  <?php if ($post['post_image3'] !== ""): ?>
    <div class="col-md-3">
      <img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image3']; ?>">
      <?= form_open('/posts/delete_image/'. $post['id'].'/'. $post['post_image1']); ?>
      <input type="submit" class="btn btn-danger" value="Delete" style="width: 100%; margin-top: 10px;">
    </form>
    </div>
  <?php endif ?>
  <?php if ($post['post_image4'] !== ""): ?>
    <div class="col-md-3">
      <img class="thumb-image" src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image4']; ?>">
      <?= form_open('/posts/delete_image/'. $post['id'].'/'. $post['post_image1']); ?>
      <input type="submit" class="btn btn-danger" value="Delete" style="width: 100%; margin-top: 10px;">
    </form>
    </div>
  <?php endif ?>
</div>
<br><br><br><br>
<hr>