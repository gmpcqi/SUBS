<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSubs extends CI_Model {
	
	public function create($dados, $tabela){
		$this->db->insert($tabela, $dados);
	}
	
	public function get($tabela){	
		return $this->db->get($tabela);
	}
	
	public function login($dados=null){
		$sql="SELECT * FROM `usuario` WHERE login=? and senha=?;";
		$query=$this->db->query($sql, array($dados['login'], $dados['senha']));
		$row=$query->row();
		if(isset($row)){
			$this->session->set_userdata('logado',True);
			$this->session->set_userdata('id',$row->id);
			$this->session->set_userdata('acesso',1);				
			return $this->session->userdata('logado');
		}
		return false;
	}
	
	public function acesso($tipo){
		$sql="SELECT * FROM `".$tipo."` WHERE usuario=?;";
		$query=$this->db->query($sql, $this->session->userdata('id'));
		$row=$query->row();
		if(isset($row))
			return true;
		return false;				
	}
	
	
	public function delete($id = null){
		
	}
	
	
}
