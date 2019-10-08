<?php

class MClient extends CI_Model
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

	public function getClients()
	{
		$this->db->select('*');
		$this->db->from('CLIENTES');
		$r = $this->db->get();
		return $r->result();
    }
}