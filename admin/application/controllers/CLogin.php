<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

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

	function __construct()
    {
		/**
		 * Carga los componentes necesarios para iniciar sesión.
		 * @param {none}
		 * @return {none}
		 */

		parent::__construct();
			$this->load->model('MLogin');
			$this->load->library('encryption');
		
    }
	
	public function index()
	{
		/**
		* Carga la vista del login para los usuarios.
		* @param  {none}
		* @return  {none}
		*/

		//Eliminación de cualquier sesión activa.
		$this->session->sess_destroy();

		//Carga de la vista para inicio de sesión de los usuarios.
		$this->load->view('Login/VLogin');

	}

	public function login()
	{
		/**
		 * Obtiene las variables post usuario y contraseña, y llama al modelo de login.
		 * 
		 * @param {none}
		 * @return {none}
		 */
		
		 $this->load->helper('url');

		 //Obtención de las variables de usuario y contraseña a tráves de POST.
		 $usuario = $this->input->post("username");
		 $pass = $this->input->post("pass");

		 //Llamada a método y envio de parametros.
		 $try = $this->MLogin->login($usuario, $pass);

		 //Creación de la variable que almacena la información de la sesión.
		 $data['sessiondata'] = $this->session->userdata();

		 //Verificación del estado de inicio de sesión.
		 if(!$try){
			$this->load->view('Login/Vlogin');
		 }
		 else{
			 
			//Verificación del nivel de privilegios.
			if($this->session->userdata("level") == 1){

				//Carga de las vistas que componen la interfaz de usuario para administrador.
				$this->load->view('Admin/VHeader', $data);
				$this->load->view('Admin/VLeftPanel');
				$this->load->view('Admin/VTopPanel');
				$this->load->view('Admin/VMainPanel');
				$this->load->view('Admin/VFooter');
			 }
			 if($this->session->userdata("level") == 2){
				 echo "Nivel 2";
			 }
			 
		 }

	}
}
