<?php

class MLogin extends CI_Model
{
    /**
	 * Index Page for this model.
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

    public function login($usuario,$pass)
    {
        /**
         * Crea el query y lo ejecuta para revisar si el usuario existe.
         * @param {string $usuario}
         * @param {string $pass}
         * @return {bool}
         */

        //Estructura de la consulta a la base de datos.
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('nickname', $usuario); 
        $this->db->where('pass', MD5($pass));
        
        //Ejecución y almacenamiento en un objeto de la respuesta de la consulta a la base de datos.
        $datos = $this->db->get();

        //Verificación y conversión de la información obtenida a un arreglo de datos.
        if ($datos->num_rows() == 1){
            $data = $datos->row();
            $userData = array(
                'id' => $data->id,
                'name' => $data->name,
                'lastname' => $data->lastname,
                'level' => $data->level,
                'nickname' => $data->nickname
            );
            
            //Creación de la sesión de usuario con la información obtenida.
            $this->session->set_userdata($userData);

            //Fin de la función, regreso de valor true que indica que la operación de login fue exitosa.
            return true;
        }
        else{
            //Fin de la función, regreso de valor false que indica que la operación de login fue fallida.
            return false;
        }
        
    }
}