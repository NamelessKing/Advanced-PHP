<div class="col-sm-12 blog-main">
  <?php foreach ($viewModel as $item) : ?>
    <div class="blog-post">
      <h3 class="blog-post-title"><?php echo $item['question']; ?></h3>
      <p class="blog-post-meta"><?php echo date('d-M-Y', strtotime($item['createdAt'])); ?> by <a href="#"><?php echo $item['name']; ?></a></p>
      <a href="<?php echo ROOT_URL; ?>questions/<?php echo $item['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
      <hr>
    </div><!-- /.blog-post -->
    <?php endforeach; ?>
</div><!-- /.blog-main -->
