<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabi extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('web/index.html');
	}

	function blog(){
		$this->load->view('web/blog.html');
	}

	function artistas(){
		$this->load->view('web/artists.html');
	}

	function clientes(){
		$this->load->view('web/clientes.html');
	}

	function contactos(){
		$this->load->view('web/contact.html');
	}
	}
	?>