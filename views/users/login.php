<form class="form-signin margin-bottom-200" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Login</button>
</form>