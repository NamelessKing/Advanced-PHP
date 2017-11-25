<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach ($viewModel as $item) : ?>
      <div class="post-preview">
        <a href="<?php echo ROOT_URL; ?>questions/<?php echo $item['id']; ?>">
          <h2 class="post-title">
            <?php echo $item['question']; ?>
          </h2>
          <h3 class="post-subtitle">
            <?php
							$tags = $item['tags'];
							$tagsArray = explode(', ', $tags);

							$colorArray = ['badge-primary', 'badge-secondary', 'badge-danger', 'badge-warning', 'badge-info', 'badge-success', 'badge-dark'];



							foreach ($tagsArray as $tag) :

								$randIndex = array_rand($colorArray);
						?>
            <span class="badge badge-pill <?php echo $colorArray[$randIndex]; ?>"><?php echo $tag; ?></span>
            <?php endforeach; ?>
          </h3>
        </a>
        <p class="post-meta">Posted by
          <a href="#"><?php echo $item['name']; ?></a>
          on <?php echo date('d-M-Y', strtotime($item['createdAt'])); ?></p>
      </div>
      <hr>
      <?php endforeach; ?>
    </div>
  </div>
</div>
