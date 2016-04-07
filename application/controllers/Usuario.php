<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //llamando al modelo
        $this->load->model('Usuario_model');
        $this->load->model('Ciudad_model');
        //Es el que maneja la ruta de todas las paginas. Se usa siempre.
        $this->load->helper('url');
    }
    public function index(){
        $data["Usuario"]=$this->Usuario_model->list_all();
        //llamar vista index
        $this->load->view('Usuario_index',$data);
    }    
    public function nuevo(){
       $data["Ciudad"]=$this->Ciudad_model->list_all();
       $this->load->view('Usuario_nuevo',$data);
    }
    public function save(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $ciudad_id=$this->input->post('ciudad_id');
        $this->Usuario_model->save($nombre,$apepat,$ciudad_id);
        redirect('Usuario');
    }
    public function eliminar($usuario_id){
        $this->Usuario_model->eliminar($usuario_id);
        redirect('Usuario');
    }
    public function ver_detalle($usuario_id){
        $data["Usuario"]=$this->Usuario_model->ver_detalle($usuario_id);
        $this->load->view('Usuario_detalle',$data);
    }
}

