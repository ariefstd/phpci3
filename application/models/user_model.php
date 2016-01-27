<?php
class User_model extends CI_Model {
	

	function Show_all()
	{
		//$this->load->database(); This is necessary when autoload['library'] was empty
		//$query = $this->db->query('SELECT * FROM user');
		//$this->db->get('user');
        $query = $this->db->get('user');
        return $query->result_array();		
	}

	function Insert_data()
	{
		//$this->load->database(); 
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tanggal' => $this->input->post('tanggal')
		);

		//$this->db->set('tanggal', 'NOW()', FALSE);
		$this->db->insert('user', $data);
		$this->load->view('welcome_message',$data);
	}
	
	function row_update($id)
	{

		$data = array(
			'username' => 'gonzo',
			'password' => '1234'
		);

	   $this->db->where('id', $id);
	   $this->db->update('user',$data); 
	}

	function row_delete($id)
	{
	   $this->db->where('id', $id);
	   $this->db->delete('user'); 
	}

}

?>