<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
        <a href="<?php echo ROOT_URL; ?>questions/<?php echo $viewModel['id']; ?>">
          <h2 class="post-title">
            <?php echo $viewModel['question']; ?>
          </h2>
          <h3 class="post-subtitle">
            <?php
							$tags = $viewModel['tags'];
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
          <a href="#"><?php echo $viewModel['name']; ?></a>
          on <?php echo date('d-M-Y', strtotime($viewModel['createdAt'])); ?>
          <?php if(isset($_SESSION['loggedIn']) && $viewModel['id_user'] == $_SESSION['user']['id']) : ?>
            | <a href="<?php echo ROOT_URL . "questions/edit/". $viewModel['id']; ?>">Edit</a>
            | <a href="<?php echo ROOT_URL . "questions/delete/". $viewModel['id']; ?>">Delete</a>
          </p>
          <?php endif; ?>
      </div>
      <hr>
    </div>
  </div>
</div>

<?php if(isset($_SESSION['loggedIn'])) : ?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form name="sentMessage" id="contactForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Your Answer</label>
						<textarea rows="5" class="form-control" placeholder="Your Answer" name="answer" required></textarea>
          </div>
        </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endif; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<br>
			<h1>Answers</h1>
			<hr>
		</div>
	</div>
</div>
<?php foreach ($viewModel as $item)  :
	if(isset($item['answer'])) :
?>
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p><?php echo $item['answer']; ?></p>

        <p>Answer by <b> <?php echo $item['name']; ?> </b></p>
				<hr>
      </div>
    </div>
  </div>
</article>
<?php endif; endforeach; ?>
