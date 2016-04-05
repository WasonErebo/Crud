<?php

class Ciudad extends CI_Controller{
    public function __construct() {
        parent::__construct();
         //llamando al modelo
        $this->load->model('Ciudad_model');
        //Es el que maneja la ruta de todas las paginas. Se usa siempre.
        $this->load->helper('url');
    }
    public function index(){
        $data["Ciudad"]=$this->Ciudad_model->list_all();
        //llamar vista index
        $this->load->view('Ciudad_index',$data);
    }
    public function nueva(){
       $this->load->view('Ciudad_nueva');
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $this->Ciudad_model->save($nombre);
        redirect('Ciudad');
    }
    public function eliminar($ciudad_id){
        $this->Ciudad_model->eliminar($ciudad_id);
        redirect('Ciudad');
    }
    public function ver_detalle($ciudad_id){
        $data["Ciudad"]=$this->Ciudad_model->ver_detalle($ciudad_id);
        $this->load->view('Ciudad_detalle',$data);
    }
}