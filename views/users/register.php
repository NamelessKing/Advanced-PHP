<form class="form-signin margin-bottom-200" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <label for="inputName" class="sr-only">Name</label>
  <input type="text" id="inputName" class="form-control" name="name" placeholder="Name" autofocus>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
  <label for="inputPassword" class="sr-only">Confirm Password</label>
  <input type="password" id="inputPassword" class="form-control" name="cpassword" placeholder="Confirm Password">

  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
</form>