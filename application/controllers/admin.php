<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('administrador/index.html');
	}

	function principalTablero(){
		$this->load->view('web/index.html');
	}

	}
	?>