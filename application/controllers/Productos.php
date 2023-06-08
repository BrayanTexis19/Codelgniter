<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function bienvenida()
	{
        $this->load->view('Productos/bienvenida_view');
	}
}