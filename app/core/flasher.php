<?php

class Flasher {

  public static function setFlash($status) {
    if( $status ) $_SESSION['flash'] = true;
    else $_SESSION['flash'] = false;
     
  }

  public static function flash() {
     if( isset($_SESSION['flash']) ) {
       if( $_SESSION['flash'] ) {
          echo '<script>
                    success();
                </script>';
       }
       else {
            echo '<script>
                     failure();
                  </script>';
       }
       unset($_SESSION['flash']);
     }
  }
}