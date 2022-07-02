<main>
  <h1>Detail Produk </h1>
  <div class="cardCon">
  <div class="card">
    <img id="imgDetail" src="<?= BASEURL ?>/asset/<?= $data['produk']['path']?>" alt="">
    <ul>
      <li><p>Nama Produk : </p> <?= $data['produk']['nama'] ?></li>
      <li><p>Jenis : </p> <?= $data['produk']['jenis'] ?></li>
      <li><p>Harga : </p><span id="harga"><?= rupiah($data['produk']['harga']) ?> / Kg</span></li>
      <li id="detail"><p>Detail Produk : </p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nulla neque non minus quod, error consectetur est quia 
        corporis sunt quam reprehenderit cumque, quos corrupti?
         Necessitatibus eius nostrum dolorem at?</span></li>
      <li><p>Pusat Produksi</p><span>Malang, Jawa Timur</span></li>
      <li><p>Rating : </p><?php for($i = 0; $i < 5; $i++) :?>
              <img class="star" src="<?= BASEURL?>/asset/star.png" alt="">
              <?php endfor ?> 5.0</li>
      <li><button id="cart">Add To Cart</button></li>
    </ul>
  </div>
  </div>
  
</main>