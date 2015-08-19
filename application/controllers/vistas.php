<?php

	class Vistas extends CI_Controller {
		
		public function index(){
			$data['head'] = $this->load->view('header','',TRUE);
			//$data['menu'] = $this->load->view('menu','',TRUE);

			$this->load->view('layout',$data);
		}

	}

?>