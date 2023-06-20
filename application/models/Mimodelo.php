<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimodelo extends CI_Model {

    public function __construct() {
        $this->load->database();
    } 

    //SELECT * FROM categorias
    public function getCategorias() {
        $resultado = $this->db->get('categorias');
        if($resultado->num_rows()>0){
            return $resultado;
        }
        else
            return false;

    }

    public function addCategoria($valores) {
        //insert into categorias
        $this->db->insert('categorias', $valores);
    }

}