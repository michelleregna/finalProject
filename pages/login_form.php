<div class="container">
    <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
    <h1 class="text-center login-title">Log in</h1>
    <div class="account-wall">
    <form action="index.php?page=accounts&action=login" class="form-signin" method="POST">
            <input type="text" class="form-control" name= "uname" placeholder="Email" required autofocus>
            <input type="password" class="form-control" name="psw" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Log in</button>
            <label class="checkbox pull-left">
            <input type="checkbox" value="remember-me">Remember me</label>
    </form>
    </div>
    <a href="index.php?page=accounts&action=register" class="text-center new-account">Create an account</a>
    </div>
    </div>
</div>