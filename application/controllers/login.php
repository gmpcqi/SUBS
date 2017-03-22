<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('logado'))
			redirect('subs');
		
		$conteudo=array(
			'tela'=>'login'
		);
		
		$this->load->view('subs',$conteudo);
	}
	
	public function logar(){
		if(!($this->session->userdata('logado'))){
			$dados=array(
				'login'=>$this->input->post('login'),
				'senha' => $this->input->post('senha')
			);
			if($this->MSubs->login($dados))
				redirect('subs');
			
		}
		redirect('');
	}
	
	public function logoff(){
		$this->session->sess_destroy();
		redirect('');
	}
}
