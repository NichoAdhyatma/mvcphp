<main>
  <h1>Halaman Produk</h1>
   <div class="searchCon">
      <form id="formSearch" action="<?= BASEURL ?>/produk" method="post">
          <input id="search" type="text" name="keyword">
          <button id="searchBtn" type="submit" name="btn-cari">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg></button>
          <img id="keranjang" src="<?= BASEURL ?>/asset/keranjang.png" alt="keranjang">
      </form>
      <button class="addBtn" id="btn" >Add New Item</button>
   </div>

   <div id="modalForm" class="modalForm">
        <div class="container-login">
          <h1>Form Tambah Barang</h1>
           <form class="form-login" action="<?= BASEURL ?>/produk/addProduk" method="post" enctype="multipart/form-data">

              <label>
              <p class="label">Nama Produk</p>
                <input class="input-form" type="text" name="produk" placeholder="Nama Produk" required autocomplete="off">
              </label>

              <label>
              <p class="label">Jenis</p>
                  <select name="jenis" id="">
                      <?php foreach( $data['jenis'] as $jenis ) : ?>
                      <option value="<?= $jenis['jenis']?>"><?= $jenis['jenis'] ?></option>
                      <?php endforeach ?>
                  </select>
              </label>

              <label>
              <p class="label">Harga</p>
                <input class="input-form" type="text" name="harga" placeholder="Rp.x.xxx" required autocomplete="off">
              </label>

              <label>
              <p class="label">Kota</p>
                <input class="input-form" type="text" name="kota" required autocomplete="off">
              </label>

              <label>
              <p id="label">Provinsi</p>
                <select name="provinsi" id="">
                   <?php foreach($data['provinsi'] as $provinsi) : ?>
                       <option value="<?= $provinsi['nama']?>"><?= $provinsi['nama'] ?></option>
                   <?php endforeach ?>
                </select>
              </label>
              
              <label>
              <p class="label">Foto Produk</p>
                <input class="input-form" type="file" name="file">
              </label>
              <label>

              <input type="submit" name="tambah" class="button success" value="Tambah Produk">
           </form>
        </div>
   </div>

   <div class="cardContainer">
    <?php if(!$data['produk']) echo "Data tidak di temukan..."?>
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
</main>
<script src="<?= BASEURL ?>/js/produk.js"></script>


