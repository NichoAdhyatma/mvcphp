<?php 

Class ConnectDb {
  protected $db;

  public function __construct() {
    $this->db = new Database;
  }
}