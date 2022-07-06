<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/nav.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/<?= $data['css'] ?>.css">
  <title>Halaman <?= $data['judul'] ?></title>
</head>

<body>
  <nav>
    <div class="left">
      <img id="leafImg" src="<?=BASEURL ?>/asset/leaf.png" alt="gambar_daun">
      <ul>
        <li><a href="<?= BASEURL ?>">Home</a></li>
        <li><a href="<?= BASEURL ?>/profile">Profile</a></li>
        <li><a href="<?= BASEURL ?>/produk">Product</a></li>
      </ul>
    </div>

    <div class="right">
<button id="btn" class="login tombol">Login</button>
<button id="btn" class="signUp tombol2">Sign Up</button>
      <img id="hmbtn" src="<?= BASEURL ?>/asset/hamburger.png" alt="">
    </div>
  </nav>
  <div class="column" id="column">
    <ul id="ulC">
      <li id="liC"><a href="<?= BASEURL ?>">Home</a></li>
      <li id="liC"> <a href="<?= BASEURL ?>/profile">Profile</a></li>
      <li id="liC"><a href="<?= BASEURL ?>/produk">Product</a></li>
      <li id="liC"><button class="tombol" id="columnLogin">Login</button></li>
      <li id="liC"><button class="tombol2" id="columnSign">Sign Up</button></li>
    </ul>
  </div>

  <div class="modal">
  <div id="loginModal"class="container-login">
  <h1>Login to Green Shop</h1>
  <form id="form-login" action="" method="post">
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
  <p id="outerP">Don't have account yet ? <a id="aLogin" class="tombol2" href="#">Register</a></p>
</div>

<div id="registerModal" class="container-login">
  <h1>Register to Green Shop</h1>

  <form id="form-login" action="<?= BASEURL ?>/profile/register" method="post">

        <label>
        <p id="label">Full-Name</p>
          <input id="input-form" type="text" name="nama" placeholder="Enter Your Full-Name" required autocomplete="off">
        </label>

        <label>
        <p id="label">Email</p>
          <input id="input-form" type="text" name="email" placeholder="Enter Your E-mail" required autocomplete="off">
        </label>

        <label>
          <p id="label">Password</p>
          <input id="input-form" class="input-pass" type="password" name="pw1" placeholder="Enter Your Password" required>
        </label>

        <label>
          <p id="label">Re-type Password</p>
          <input id="input-form" class="input-pass" type="password" name="pw2" placeholder="Enter Your Password Again" required>
        </label>

        <div class="err">
           <p></p>
        </div>

        <input id="login-btn" type="submit" name="register" value="Register">
  </form>
  <p id="outerP">Already Have Account ? <a id="aLogin" class="tombol" href="#">Login</a></p>
</div>

  </div>

