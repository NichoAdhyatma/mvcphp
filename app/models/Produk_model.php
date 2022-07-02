<?php

class Produk_model {
  private $table =  'produk';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllProduk() {
     $this->db->query("SELECT * FROM $this->table LIMIT 12");
     return $this->db->resultSet();
  }

  public function getProdukById($id) {
      $this->db->query("SELECT * FROM $this->table WHERE id=:id");
      $this->db->bind('id', $id);
      return $this->db->single();
    
  }
}