<h1> Login to Task App </h1>

 <div class="container">

      <form action="index.php?page=accounts&action=login" class="form-signin" method="POST">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="uname" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="psw" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
    <a href="index.php?page=accounts&action=register" class="text-center new-account">Create an account</a>
    </div>
    </div>
</div>

