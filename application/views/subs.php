<?php
	$this->load->view('includes/head');
	if($this->session->userdata('logado'))
		$this->load->view('includes/menu');
	if(isset($tela))
		$this->load->view('telas/'.$tela);
	$this->load->view('includes/foot');
	
