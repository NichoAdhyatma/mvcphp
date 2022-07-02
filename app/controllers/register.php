<?php 
class Register extends Controller {
  public function index() {
     $data['judul'] = 'Register';
     $data['css'] = 'register';
     $this->view('templates/header', $data);
     $this->view('register/register');
     $this->view('templates/footer'); 
  }
}