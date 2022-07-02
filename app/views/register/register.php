<div class="container">
  <div class="left">
    <div class="card">
      <p id="loginP">Already have account ? </p>
      <button id="login-btn">Login</button>
    </div>
  </div>
  <a href="<?= BASEURL ?>"><button id="home-btn">Home</button>
    <div class="right">
  </a>
  <h1>Register Form</h1>
  <form action="index.html" method="post">
    <label>
      <p>Full Name</p>
      <input id="input-form" type="text" name="" id="" placeholder="Enter your full name" required>
    </label>
    <label>
      <p>E-mail</p>
      <input id="input-form" type="text" name="" id="" placeholder="Enter your email addess" required>
    </label>
    <label>
      <p>Password</p>
      <input id="input-form" type="password" name="" id="" placeholder="Password min 8 character " required>
    </label>
    <label>
      <p>Re-Type Password</p>
      <input id="input-form" type="password" name="" id="" placeholder="Input your password again" required>
    </label>
    <br>
    <input id="btn-regis" type="submit" name="submit" value="Register">
  </form>
  <p id="outerP">Already have account ? <a href="<?= BASEURL?>/login">Login</a></p>
</div>
</div>