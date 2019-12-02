<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(["url", "security"]);
		$this->load->database();
	}

	public function index()
	{
		$data["base_url"] = base_url();
		$this->load->view('login', $data);
	}

	public function login(){
		$email = $this->input->post('email');
		$senha = md5($this->input->post('password'));
		$usuario = $this->usuario->login($email, $senha);

		if(count($usuario) > 0){
			$this->session->set_userdata($usuario[0]);
			redirect("/cursos");
		}else{
			$this->session->set_flashdata("erro", true);
			$this->session->set_flashdata("mensagem", "E-mail e/ou senha incorretos!");
			redirect("/login");
		}
	}

	public function cadastro(){
		$usuario = array(
			"nome" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"senha" => md5($this->input->post("password"))
		);
		$usuario = $this->security->xss_clean($usuario);
		//verificar se email ja existe
		$verifica = $this->usuario->verificaEmail($usuario["email"]);

		if(count($verifica) > 0){
			$this->session->set_flashdata("erro", true);
			$this->session->set_flashdata("mensagem", "Esse email já está cadastrado!");
		}else{
			//Verificar se conseguiu se cadastrar
			if($this->usuario->cadastrar($usuario)){
				$this->session->set_flashdata("erro", false);
				$this->session->set_flashdata("mensagem", "Cadastrado com sucesso!");
			} else {
				$this->session->set_flashdata("erro", true);
				$this->session->set_flashdata("mensagem", "Erro ao cadastrar, tente novamente!");
			}
		}
		redirect("/login");
	}

	public function sair(){
		$this->session->sess_destroy();
		redirect("/login");
	}

}
