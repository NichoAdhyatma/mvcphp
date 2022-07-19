<?php 

abstract class Controller {
    public function view( $view, $data = []) {
       require_once '../app/views/' . $view . '.php';
    }

    public function model( $model ) {
        require_once  APP. 'models/' .$model. '.php';
        return new $model;
    }
}