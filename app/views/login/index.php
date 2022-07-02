<div class="bg">
</div>
<a href="<?= BASEURL ?>"><button id="btn-home">Home</button></a>
<div class="container">
  <h1>Login to Green Shop</h1>
  <img id="imgLeaf" src="<?= BASEURL ?>/asset/leaf.png" alt="">
  <form action="" method="post">
    <label>
      <p id="label">Email</p>
      <input id="input-form" type="text" name="" placeholder="Enter Your E-mail" required autocomplete="off">
    </label>
    <label>
      <p id="label">Password</p>
      <input id="input-form" class="input-pass" type="password" name="" placeholder="Enter Your Password" required>
    </label>
    <input id="login-btn" type="button" value="Login">
  </form>
  <p id="outerP">Don't have account yet ? <a href="<?= BASEURL ?>/register">Register</a></p>
</div>