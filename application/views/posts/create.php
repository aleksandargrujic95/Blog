<h2><?= $title;  ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Password</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"></textarea>
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