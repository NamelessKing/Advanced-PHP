<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form name="sentMessage" id="contactForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name">
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" name="email">
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
          </div>
        </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
