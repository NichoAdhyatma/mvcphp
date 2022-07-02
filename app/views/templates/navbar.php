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
        <li><a href="<?= BASEURL ?>/about">About</a></li>
        <li><a href="<?= BASEURL ?>/produk">Product</a></li>
      </ul>
    </div>

    <div class="right">
      <a href="<?= BASEURL ?>/login"><button id="btn" class="login">Login</button></a>
      <a href="<?= BASEURL ?>/register"><button id="btn" class="signUp">Sign Up</button></a>
      <img id="hmbtn" src="<?= BASEURL ?>/asset/hamburger.png" alt="">
    </div>
  </nav>
  <div class="column" id="column">
    <ul id="ulC">
      <li id="liC"><a href="<?= BASEURL ?>">Home</a></li>
      <li id="liC"> <a href="<?= BASEURL ?>/about">About</a></li>
      <li id="liC"><a href="<?= BASEURL ?>/produk">Product</a></li>
      <li id="liC"><a href="<?= BASEURL ?>/login"><button id="columnLogin">Login</button></li>
      <li id="liC"><a href="<?= BASEURL ?>/register"><button id="columnSign">Sign Up</button></a></li>
    </ul>
  </div>