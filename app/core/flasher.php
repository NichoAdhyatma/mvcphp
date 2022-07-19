<?php

class Flasher {

  public static function setFlash($status, $judul) {
    if( $status ) $_SESSION['flash'] = true;
    else $_SESSION['flash'] = false; 
    $_SESSION['judul'] = $judul;
  }

  public static function flash() {
     if( isset($_SESSION['flash']) ) {
        if( $_SESSION['judul'] == 'ubah') {
            if($_SESSION['flash']) echo "<script>Swal.fire('Berhasil!', 'Data produk berhasil di ubah', 'success')</script>";
            else echo "<script>Swal.fire('Tidak ada perubahan..', 'Data produk tidak berubah', 'info')</script>";
        }
        else if( $_SESSION['judul'] == 'tambah') {
          if($_SESSION['flash']) echo "<script>Swal.fire('Berhasil!', 'Data produk berhasil di tambahkan', 'success')</script>";
          else echo "<script>Swal.fire('Gagal...', 'Data produk gagal ditambahkan', 'error')</script>";
        }
        else if( $_SESSION['judul'] == 'hapus') {
          if($_SESSION['flash']) echo "<script>Swal.fire('Berhasil!', 'Data produk berhasil di hapus', 'success')</script>";
          else echo "<script>Swal.fire('Gagal...', 'Data produk gagal dihapus', 'error')</script>";
        }
        else if( $_SESSION['judul'] == 'user') {
          if($_SESSION['flash']) echo "<script> Swal.fire('Berhasil!', 'Registrasi berhasil!', 'success')</script>";
          else echo "<script>Swal.fire('Gagal...', 'Harap masukan data dengan benar!', 'error')</script>";
        }
        unset($_SESSION['flash']);
     }
  }
}