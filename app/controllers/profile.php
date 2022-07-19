<?php 

class Profile extends Controller{
  public function index() {
     $data['judul'] = 'profile';
     $data['css'] = 'profile';

     $this->view('templates/navbar', $data);
     $this->view('profile/index', $data);
     $this->view('templates/footer');
  }
  
  public function register() {
      if(isset($_POST['register'])) {
        if( $this->model('User_model')->registerUser($_POST) > 0 )  
           Flasher::setFlash(true, 'user');
        else Flasher::setFlash(false, 'user');
      }
      header('Location: '.BASEURL);
  } 

  public function page() {
      $data['judul'] = "Page";
      $data['css'] = "nav";
      $this->view('templates/navbar', $data);
      $this->view('profile/page');
      $this->view('templates/footer');
  }
}