
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
   
    public function agresiones()
	{
		$this->db->select('i.archivo_binario', 'i.archivo_nombre');
		$this->db->from('categoria_imagen ci');
		$this->db->join('imagen i', 'i.id_categoria_imagen = ci.id_categoria_imagen');
		$this->db->where('ci.combre_categoria','agresiones');
		/*$this->db->select('archivo_binario')->from('imagen')->where('id'=$id);*/
		$query = $this->db->get();
		return $query->result_array();
	}
 }
    //obtenemos todos los comentarios de un usuario y sus datos si le pasamos
    //un id como argumento, y si no los cogemos todos
    
/*
 * end of application/models/consultas_model.php
 */