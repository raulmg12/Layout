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
		
		public function page($page='g'){
			
			//Se carga el hemlper que nos dara la ruta base
			$this->load->helper('url');
			
			//Verifica si se encuentra el archivo
			 if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
                // Whoops, we don't have a page for that!
                show_404();
			}
				//Carga el header para todos, pero hay que hagregarlo o imprimirlo en cada pagina individual
				$data['head'] = $this->load->view('header','',TRUE);
				$this->load->view($page,$data);
			
		}

	}

?>