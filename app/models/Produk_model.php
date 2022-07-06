<?php

class Produk_model extends ConnectDb {
  private $table =  'produk';
  
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