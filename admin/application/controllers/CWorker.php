<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CWorker extends CI_Controller {

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

	function __construct(){
		/**
		 * Carga los componentes necesarios para iniciar sesión.
		 * @param {none}
		 * @return {none}
		 */

		parent::__construct();
		$this->load->model('MClient');
		
    }
	
	public function index(){
		/**
		 * Envia una petición al modelo para obtener una lista de los clientes registrados.
		 * 
		 * @param {none}
		 * @return {none}
		 */

		//Creación de la variable que almacena la información de la sesión.
		$data['sessiondata'] = $this->session->userdata();

		//Verificación del estado de inicio de sesión.
		if($this->session->userdata("level") == 1){
			//Carga de las vistas que componen la interfaz de usuario para administrador.
			$this->load->view('AdminLayout/VHeader', $data);
			$this->load->view('AdminLayout/VTopMenu');
			$this->load->view('AdminLayout/VSideMenu');
			$this->load->view('Clients/VList');
			$this->load->view('AdminLayout/VFooter');
		}
		else{
			$this->load->view('Login/Vlogin');	
		}
	}

	public function list(){

		//Creación de la variable que almacena la información de la sesión.
		$data['sessiondata'] = $this->session->userdata();

		//Verificación del estado de inicio de sesión.
		if($this->session->userdata("level") == 1){
			//Carga de las vistas que componen la interfaz de usuario para administrador.
			$this->load->view('AdminLayout/VHeader', $data);
			$this->load->view('AdminLayout/VTopMenu');
			$this->load->view('AdminLayout/VSideMenu');
			$this->load->view('Clients/VList');
			$this->load->view('AdminLayout/VFooter');
		}
		else{
			$this->load->view('Login/Vlogin');	
		}
	}

	public function getClients()
	{
		/**
		 * Envia una petición al modelo para obtener una lista de los clientes registrados.
		 * 
		 * @param {none}
		 * @return {none}
		 */
		echo json_encode($this->MClient->getClients());
	}

}
