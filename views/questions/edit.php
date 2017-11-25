<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form name="sentMessage" id="contactForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Enter Your Question</label>
            <input type="text" class="form-control" placeholder="Enter Your Question" name="question" value="<?php echo $viewModel['question']; ?>" required>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Tags</label>
            <input type="text" class="form-control" placeholder="Tags Comma Seperated" name="tags" value="<?php echo $viewModel['tags']; ?>" required>
          </div>
        </div>
        <br>
        <div class="form-group">
          <button type="text" class="btn btn-primary" name="submit">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
