<div class="blog-header">
	<div class="container">
	  <h1 class="blog-title"><?php echo $viewModel['question']; ?></h1>
	  <p class="blog-post-meta"><?php echo date('d-M-Y', strtotime($viewModel['createdAt'])); ?> by <a href="#"><?php echo $viewModel['name']; ?></a></p>
	</div>
</div>
