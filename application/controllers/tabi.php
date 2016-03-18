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

	function ver(){
		$this->load->view('web/ver.php');
	}

	function imagenes(){
		$this->load->view('web/listar_imagenes.php');
	}


	function sujeto(){
		$this->load->view('web/sujeto.html');
	}

	function verbo(){
		$this->load->view('web/verbo.html');
	}

	function sentimientos(){
		$this->load->view('web/sentimientos.html');
	}

	function sentimientos_frase(){
		$this->load->view('web/sentimientos_frase.html');
	}

	}
	?>