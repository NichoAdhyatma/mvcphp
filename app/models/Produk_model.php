<?php

class Produk_model extends ConnectDb
{
  private $table =  'produk';

  public function getAllProduk()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  public function getJenis()
  {
    $this->db->query("SELECT * FROM jenis");
    return $this->db->resultSet();
  }

  public function getProvinsi()
  {
    $this->db->query("SELECT * FROM wilayah_provinsi");
    return $this->db->resultSet();
  }

  public function getProdukById($id)
  {
    $this->db->query("SELECT * FROM $this->table WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function deleteProduk($id)
  {
    $data = $this->getProdukById($id);

    $this->db->query("DELETE FROM $this->table WHERE id=:id");
    $this->db->bind('id', $id);
    $this->db->execute();

    if ($data['path'] != 'default.png') unlink("../public/asset/" . $data['path']);

    return $this->db->rowCount();
  }

  public function image()
  {
    if ($_FILES['file']['error'] == 4) return false;
    //random nama file
    $dir =  '../public/asset/';
    $exp_str = explode('.', $_FILES['file']['name']);
    $namaFile = rand(1000, 100000);
    $_FILES['file']['name'] = $namaFile . '.' . $exp_str[1];

    $tmp_name = $_FILES['file']['tmp_name'];

    $path = $dir . $_FILES['file']['name'];
    move_uploaded_file($tmp_name, $path);
    return true;
  }

  public function addProduk($data)
  {

    $query = "INSERT INTO $this->table VALUES('', :nama, :jenis, :harga, :kota, :provinsi, :foto)";

    $this->db->query($query);
    $this->db->bind('nama', $data['produk']);
    $this->db->bind('jenis', $data['jenis']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('kota', $data['kota']);
    $this->db->bind('provinsi', $data['provinsi']);


    $this->db->bind('foto', 'default.png');

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function ubahProduk($data)
  {

    $prodak = $this->getProdukById($data['id']);


    $query = "UPDATE $this->table
                    SET nama = :nama,
                        jenis = :jenis,
                        harga = :harga,
                        kota = :kota,
                        provinsi = :provinsi,
                        path = :foto
                    WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama', $data['produk']);
    $this->db->bind('jenis', $data['jenis']);
    $this->db->bind('harga', $data['harga']);
    $this->db->bind('kota', $data['kota']);
    $this->db->bind('provinsi', $data['provinsi']);
    $this->db->bind('id', $data['id']);

    if (!$this->image()) $this->db->bind('foto', $prodak['path']);
    else $this->db->bind('foto', $_FILES['file']['name']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cariProduk()
  {
    $keyword = $_POST['keyword'];

    $query = "SELECT * FROM $this->table WHERE nama LIKE :keyword";
    $this->db->query($query);
    $this->db->bind("keyword", "%$keyword%");
    return $this->db->resultSet();
  }
}
