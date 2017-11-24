<div class="container">
	<div class="row">
		<div class="col-md-auto">
			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			  <div class="form-group">
			    <label>Enter Your Question</label>
			    <input type="text" class="form-control" name="question" value="<?php echo $viewModel['question']; ?>" required autofocus>
			  </div>
			  <div class="form-group">
			    <label>Enter Tags</label>
			    <input type="text" class="form-control" name="tags" value="<?php echo $viewModel['tags']; ?>" required placeholder="Seperate your tags by comma">
			  </div>
			  <button class="btn btn-primary" type="submit" name="submit">Update</button>
			</form>
		</div>
	</div>
</div>
