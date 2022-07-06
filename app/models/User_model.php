<?php

class User_model extends ConnectDb {
  private $table =  'users';

  public function validate($data) {
     $email = $data['email'];
     $password = $data['pw1'];
     $password2 = $data['pw2'];

     $this->db->query("SELECT * FROM $this->table WHERE email=:email");
     $this->db->bind('email', $email);
     $this->db->execute();

     if( $this->db->rowCount() > 0 )  return false;
     
     else if( $password2 != $password ) return false;

     return true;
  }

  public function registerUser($data) {
     
    if( $this->validate($data) ) {
        $data['pw1'] = password_hash($data['pw1'], PASSWORD_DEFAULT);

        $query = "INSERT INTO $this->table VALUES('', :nama, :email, :pw1) "; 

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pw1', $data['pw1']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    else {
      return 0;
    }
  }

}