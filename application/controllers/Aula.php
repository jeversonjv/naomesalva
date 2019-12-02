<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(["url"]);
	}

	public function visualizar($id){
		$data["base_url"] = base_url();
		$data["conteudo"] = $this->load->view("aula", $data, TRUE);
		$data["nome"] = $this->session->userdata("nome");
		$this->load->view("layout", $data);
	}

}
