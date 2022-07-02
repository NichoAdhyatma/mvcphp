<?php

class Produk extends Controller {
  public function index() {
      $data['judul'] = 'Daftar Produk';
      $data['css'] = 'produk';
      $data['produk'] = $this->model('Produk_model')->getAllProduk();

      $this->view('templates/navbar', $data);
      $this->view('produk/index', $data);
      $this->view('templates/footer');
  }
  public function detail($id) {
      $data['judul'] = 'Detail Produk';
      $data['css'] = 'detail';
      $data['produk'] = $this->model('Produk_model')->getProdukById($id);
      
      $this->view('templates/navbar', $data);
      $this->view('produk/detail', $data);
      $this->view('templates/footer');
  }

}