<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(["url"]);
	}

	public function index(){
		$data["base_url"] = base_url();
		$data["conteudo"] = $this->load->view("cursos", $data, TRUE);
		$data["nome"] = $this->session->userdata("nome");
		$this->load->view("layout", $data);
	}

}
