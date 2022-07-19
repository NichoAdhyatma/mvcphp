<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $data['css'] = 'home';

    $this->view('templates/navbar', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
