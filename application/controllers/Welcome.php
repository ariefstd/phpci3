<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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



	public function index()
	{
		// index ini untuk menampilkan record ...
		$this->load->model('User_model');
		$data['databaru'] = $this->User_model->Show_all();
		$this->load->view('welcome_message',$data);
	}
	
	function input_data_user(){
		$this->load->model('User_model');
		$this->User_model->Insert_data();
		//$this->load->view('welcome_message');
		redirect(base_url());
	}	

	function update_row()
	{
		$id = $this->input->get('id');
		$this->load->model('User_model');
		$this->User_model->row_update($id);
	   redirect(base_url());
	}

	function delete_row()
	{
		$id = $this->input->get('id');
		$this->load->model('User_model');
		$this->User_model->row_delete($id);
	   redirect(base_url());
	}

}
