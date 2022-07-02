<main>
  <h1>Halaman Produk</h1>
   <div class="searchCon">
     <form action="">
      <input id="search" type="text" name="" id="">
      <button id="searchBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
<img id="keranjang" src="<?= BASEURL ?>/asset/keranjang.png" alt="keranjang">
     </form>
   
   </div>
   <div class="cardContainer">
    <?php foreach( $data['produk'] as $produk ) : ?>
    <a href="<?= BASEURL?>/produk/detail/<?=$produk['id']?>" >
   <div class="card">
            
            <ul>
              <div class="img">
              <img id="produkImg" src="<?= BASEURL ?>/asset/<?= $produk['path'] ?>" alt="gambar_prodak">
              </div>
           
              <li><h5><?=$produk['nama']?></h5></li>
              <li><?=$produk['jenis']?></li>
              <li id="harga"><?= rupiah($produk['harga']) ?></li>
              <li><?php for($i = 0; $i < 5; $i++) :?>
              <img class="star" src="<?= BASEURL?>/asset/star.png" alt="">
              <?php endfor ?> 5.0</li>
              <li><a href="<?= BASEURL ?>/produk/detail/<?= $produk['id'] ?>"><button id="btn-produk">Detail Produk</button></a></li>
            </ul>
        </div>
</a>
        
    <?php endforeach ?>
  </div>
  <footer><p>Made By Nicho</p></footer>
</main>


