<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('consultas_model');
        $this->load->helper('url');
        $this->load->database('default');
    }
    public function index()
    {
        $data['agresiones'] = $this->consultas_model->agresiones();
        echo '<pre>';
        print_r($data['agresiones']);
        $this->load->view('consultas_view',$data);
    }
}
/*
 * end of application/controllers/consultas.php
 */