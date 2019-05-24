<article class="korter">
<div class="row">
    <div class="col-4">
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
    <label for="exampleInputFirstname">Firstname</label>
    <input type="text" class="form-control" id="exampleInputFirstname" placeholder="Firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="exampleInputInfix">Infix</label>
    <input type="text" class="form-control" id="exampleInputInfix" placeholder="Infix" name="infix">
  </div>
  <div class="form-group">
    <label for="exampleInputLastname">Lastname</label>
    <input type="text" class="form-control" id="exampleInputLastname" placeholder="Lastname" name="lastname">
  </div>
    <button type="submit" class="btn btn-success btn-block">Submit</button>
    </form>
    </div>
    <div class="col-4"></div>
    <div class="col-4">
    <h1>Account login</h1>
    <form action ="./index.php?content=login-script" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
    </div>
    </div>
</div>
</article>