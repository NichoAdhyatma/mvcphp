<?php 

class About extends Controller{
  public function index($nama = 'Person', $pekerjaan = 'Job') {
     $data['nama'] = $nama;
     $data['pekerjaan'] = $pekerjaan;
     $data['judul'] = 'About';
     $data['css'] = 'about';

     $this->view('templates/navbar', $data);
     $this->view('about/index', $data);
     $this->view('templates/footer');
  }
  public function page() {
   $data['judul'] = "Page";
   $data['css'] = "nav";
     $this->view('templates/navbar', $data);
     $this->view('about/page');
     $this->view('templates/footer');
  }
}