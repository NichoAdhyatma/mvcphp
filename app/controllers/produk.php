<?php

class Produk extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Produk';
    $data['css'] = 'produk';
    if (isset($_POST['keyword'])) $data['produk'] = $this->model('Produk_model')->cariProduk($_POST);
    else $data['produk'] = $this->model('Produk_model')->getAllProduk();
    $data['jenis'] = $this->model('Produk_model')->getJenis();
    $data['provinsi'] = $this->model('Produk_model')->getProvinsi();

    $this->view('templates/navbar', $data);
    $this->view('produk/index', $data);
    $this->view('templates/footer');
  }
  public function detail($id)
  {
    $data['judul'] = 'Detail Produk';
    $data['css'] = 'detail';
    $data['produk'] = $this->model('Produk_model')->getProdukById($id);
    $data['jenis'] = $this->model('Produk_model')->getJenis();
    $data['provinsi'] = $this->model('Produk_model')->getProvinsi();

    $this->view('templates/navbar', $data);
    $this->view('produk/detail', $data);
    $this->view('templates/footer');
  }

  public function addProduk()
  {
    if (isset($_POST['tambah'])) {
      if ($this->model('Produk_model')->addProduk($_POST) > 0) Flasher::setFlash(true, 'tambah');
      else Flasher::setFlash(false, 'tambah');
    }
    header('Location: ' . BASEURL . '/produk');
  }

  public function hapus($id)
  {

    if ($this->model('Produk_model')->deleteProduk($id) > 0) Flasher::setFlash(true, 'hapus');
    else Flasher::setFlash(false, 'hapus');

    header('Location: ' . BASEURL . '/produk');
  }

  public function getUbah()
  {
    json_encode($this->model('Produk_model')->getProdukById($_POST['id']));
  }

  public function ubahProduk()
  {
    if (isset($_POST['ubah'])) {
      if ($this->model('Produk_model')->ubahProduk($_POST) > 0) Flasher::setFlash(true, 'ubah');
      else Flasher::setFlash(false, 'ubah');
    }
    header('Location: ' . BASEURL . '/produk/detail/' . $_POST['id']);
  }
}
