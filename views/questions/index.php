<?php if(isset($_SESSION['loggedIn'])) : ?>
<div class="blog-header">
	<div class="container">
	  <h1 class="blog-title">Ask A Question?</h1>
	  <a href="<?php echo ROOT_URL; ?>questions/add" class="btn btn-primary">Ask Question</a>
	</div>
</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<?php foreach ($viewModel as $item) : ?>
		<div class="col-md-12">
			<h3><?php echo $item['question']; ?></h3>
			<p><?php echo $item['tags']; ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>