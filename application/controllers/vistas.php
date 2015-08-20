<?php

	class Vistas extends CI_Controller {
		
		public function index(){
			
			$this->load->helper('url');
			$data['head'] = $this->load->view('header','',TRUE);
			$data['menu'] = $this->load->view('menu_admin','',TRUE);
			$data['contenedor'] = $this->load->view('conten_admin','',TRUE);
			$data['footer'] = $this->load->view('footer','',TRUE);

			$this->load->view('layout',$data);
		}
		
		public function usuario(){
			
			$this->load->helper('url');
			$data['head'] = $this->load->view('header','',TRUE);
			$data['menu'] = $this->load->view('menu_usuario','',TRUE);
			$data['contenedor'] = $this->load->view('conten_usuario','',TRUE);
			$data['footer'] = $this->load->view('footer','',TRUE);

			$this->load->view('layout',$data);
		}

	}

?>