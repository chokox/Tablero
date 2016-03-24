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

	function que_necesitas(){
		$this->load->view('web/que_necesitas.html');
	}

	function que_ponerse(){
		$this->load->view('web/que_ponerse.html');
	}

	function que_quieres(){
		$this->load->view('web/que_quieres.html');
	}

	function que_comer(){
		$this->load->view('web/que_comer.html');
	}

	function que_carne(){
		$this->load->view('web/que_carne.html');
	}


	function que_pan(){
		$this->load->view('web/que_pan.html');
	}

	function que_postre(){
		$this->load->view('web/que_postre.html');
	}

	function que_fruta_o_verdura(){
		$this->load->view('web/que_fruta_o_verdura.html');
	}

	function que_beber(){
		$this->load->view('web/que_beber.html');
	}

	function que_jugar(){
		$this->load->view('web/que_jugar.html');
	}

	function quien_visitar(){
		$this->load->view('web/quien_visitar.html');
	}

	function como_viajar(){
		$this->load->view('web/como_viajar.html');
	}

	function quien_abrazar(){
		$this->load->view('web/quien_abrazar.html');
	}

	function donde_ir(){
		$this->load->view('web/donde_ir.html');
	}

	function que_tienes(){
		$this->load->view('web/que_tienes.html');
	}

	function que_dolor(){
		$this->load->view('web/que_dolor.html');
	}
	}
	?>