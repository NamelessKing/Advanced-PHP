<div class="blog-header">
	<div class="container">
	  <h1 class="blog-title"><?php echo $viewModel['question']; ?></h1>
	  <p class="blog-post-meta"><?php echo date('d-M-Y', strtotime($viewModel['createdAt'])); ?> by <a href="#"><?php echo $viewModel['name']; ?></a></p>
		<?php if(isset($_SESSION['loggedIn']) && $viewModel['id_user'] == $_SESSION['user']['id']) : ?>
		<p><a href="<?php echo ROOT_URL . "questions/edit/". $viewModel['id']; ?>">edit</a></p>
	<?php endif; ?>
	</div>
</div>
<?php if(isset($_SESSION['loggedIn'])) : ?>
<div class="row">
	<div class="col-md-12">
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="form-group">
				<label>Write your answer</label>
				<textarea name="answer" rows="8" cols="80" class="form-control"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="submit">Submit</button>
		</form>
	</div>
</div>
<?php endif; ?>
<div class="container">
	<hr>
	<div class="row">
		<?php foreach ($viewModel as $item)  :
			if(isset($item['answer'])) :
		?>
		<hr>
		<div class="col-md-12">
			<p><?php echo $item['answer']; ?></p>
			<p><?php echo $item['name']; ?></p>
		</div>
	<?php endif; endforeach; ?>
	</div>
</div>
