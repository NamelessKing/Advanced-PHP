<?php if(isset($_SESSION['loggedIn'])) : ?>
<div class="blog-header">
	<div class="container">
	  <h1 class="blog-title">Ask A Question?</h1>
	  <a href="<?php echo ROOT_URL; ?>questions/add" class="btn btn-primary">Ask Question</a>
	</div>
</div>
<?php endif; ?>

<div class="container">
		<?php foreach ($viewModel as $item) : ?>
			<div class="row">
		    <div class="blog-post">
		      <h3 class="blog-post-title"><?php echo $item['question']; ?></h3>
		      <p class="blog-post-meta"><?php echo date('d-M-Y', strtotime($item['createdAt'])); ?> by <a href="#"><?php echo $item['name']; ?></a></p>
					<p>
						<?php
							$tags = $item['tags'];
							$tagsArray = explode(', ', $tags);

							$colorArray = ['badge-primary', 'badge-secondary', 'badge-danger', 'badge-warning', 'badge-info'];



							foreach ($tagsArray as $tag) :

								$randIndex = array_rand($colorArray);
						?>
						<span class="badge badge-pill <?php echo $colorArray[$randIndex]; ?>"><?php echo $tag; ?></span>
					<?php endforeach; ?>
					</p>
				  <a href="<?php echo ROOT_URL; ?>questions/<?php echo $item['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
		      <hr>
		    </div><!-- /.blog-post -->
			</div>
	    <?php endforeach; ?>
</div>
