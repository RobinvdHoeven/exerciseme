<article class="signup">
<div class="row">
    <div class="col-4">
    <h1>Sign up</h1>
    <br>
    <form action="./index.php?content=register-script" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Repeat password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat" name="checkpassword">
  </div>
    <div class="form-group">
    <label for="exampleInputFirstname">Full name</label>
    <input type="text" class="form-control" id="exampleInputFirstname" placeholder="Full name" name="firstname">
  </div>
  <br>
    <button type="submit" class="btn btn-success btn-block">Sign up</button>
    </form>
    </div>
    <div class="col-4"></div>
    <div class="col-4">
    <h1>Login</h1>
    <br>
    <form action ="./index.php?content=login-script" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
    </div>
    </div>
</div>
</article>