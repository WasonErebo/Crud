<?php

class Encriptar extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $nombre='1234';
        $salida=password_hash($nombre,PASSWORD_DEFAULT);
        echo $salida;
    }
}

