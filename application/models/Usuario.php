<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model{

	public function __construct(){
			parent::__construct();
	}

	public function cadastrar($usuario){
		return $this->db->insert("usuarios" , $usuario);
	}

  public function login($email, $senha)
  {
    $this->db->where("email", $email);
    $this->db->where("senha", $senha);
    $usuario = $this->db->get("usuarios")->result_array();
    
    return $usuario;
	}
	
	public function verificaEmail($email){
		$this->db->where("email", $email);
		$usuario = $this->db->get("usuarios")->result_array();

		return $usuario;
	}
}
