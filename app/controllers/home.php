<?php

class Home Extends Controller {
  public function index() {
    $data['judul'] = 'Home';
    $data['css'] = 'home';
    $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/navbar', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}