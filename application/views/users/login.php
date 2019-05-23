<?= form_open('users/login'); ?>
	<div class="row">
		<div class="coll-md-4 coll-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?= form_close(); ?>