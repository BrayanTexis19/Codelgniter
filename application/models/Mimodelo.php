<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimodelo extends CI_Model {

    public function __construct() {
        $this->load->database();
    } 

    //SELECT * FROM categorias
    public function getCategorias($id=false) {
        if($id!=false) {
           $this->db->where('id_categorias', $id);
        }
        $resultado = $this->db->get('categorias');
        if($resultado->num_rows()>0) {
            return $resultado;
        }
        else
            return false;

    }

    public function addCategoria($valores) {
        //insert into categorias
        $this->db->insert('categorias', $valores);
    }

    public function lessCategoria($id){
        $this->db->where('id_categoria', $id);
        $this->db->delete('categorias');
    }

    public function updateCategoria($id, $data){
        $this->db->where('id_categoria', $id);
        $this->db->update('categorias', $data);
    }

}