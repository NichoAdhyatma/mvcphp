<main>
  <h1>Detail Produk </h1>
  <div id="modalForm" class="modalForm">
        <div id="formUbah" class="container-login">
          <h1>Form Ubah Produk</h1>
           <form class="form-login" action="<?= BASEURL ?>/produk/ubahProduk" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id" value="<?= $data['produk']['id']?>">
              <label>
              <p class="label">Nama Produk</p>
                <input id="nama" class="input-form" type="text" name="produk" placeholder="Nama Produk" required autocomplete="off">
              </label>

              <label>
              <p class="label">Jenis</p>
                  <select id="jenis" name="jenis">
                      <?php foreach( $data['jenis'] as $jenis ) : ?>
                      <option value="<?= $jenis['jenis']?>"><?= $jenis['jenis'] ?></option>
                      <?php endforeach ?>
                  </select>
              </label>

              <label>
              <p class="label">Harga</p>
                <input id="harga" class="input-form" type="text" name="harga" placeholder="Rp.x.xxx" required autocomplete="off">
              </label>

              <label>
              <p class="label">Kota</p>
                <input id="kota" class="input-form" type="text" name="kota" required autocomplete="off">
              </label>

              <label>
              <p class="label">Provinsi</p>
                <select id="provinsi" name="provinsi">
                   <?php foreach($data['provinsi'] as $provinsi) : ?>
                       <option value="<?= $provinsi['nama']?>"><?= $provinsi['nama'] ?></option>
                   <?php endforeach ?>
                </select>
              </label>
              
              <label>
              <p class="label">Foto Produk</p>
                <input id="foto" class="input-form" type="file" name="file"  autocomplete="off">
              </label>
              <label>

              <input type="submit" name="ubah" class="button success" value="Ubah Produk">
           </form>
        </div>
   </div>

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
      <li><p>Pusat Produksi</p><span><?= $data['produk']['kota']?>, <?= $data['produk']['provinsi']?></span></li>
      <li id="rating" ><p>Rating : </p>
      <div class="starCon">
      <?php for($i = 0; $i < 5; $i++) :?>
              <img class="star" src="<?= BASEURL?>/asset/star.png" alt="">
              <?php endfor ?> 5.0
      </div>
      </li>
      <li><button id="cart">Add To Cart</button></li>
      <div class="btn-group">
      <li><a class="ubah" data-id="<?= $data['produk']['id'] ?>"><button class="button success">Edit Produk</button></a></li>
      <li><a onclick="return confirm('Ingin menghapus produk ini ?')" href="<?= BASEURL ?>/produk/hapus/<?= $data['produk']['id'] ?>"><button class=" button danger">Hapus Produk</button></a></li>
      </div>
    
    </ul>
  </div>
  </div>
  
</main>