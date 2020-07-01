<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{	
    public function __construct()
    {
        parent::__construct();                   
        $this->load->model('Welcome_model','welcome'); 
    }

	public function index()
	{
		$this->load->view('welcome');
	}

	public function state()
	{
		$this->data['view_data']= $this->welcome->view_data('state');
	    $this->load->view('state',$this->data);
	}

	public function edit_state($id)
    { 
	    $this->data['edit_data']= $this->welcome->edit_data($id,'state');
	    $this->load->view('edit_state', $this->data);
    }

    public function edit_city($id)
    { 
	    $this->data['edit_data']= $this->welcome->edit_data($id,'cities');
	    $this->load->view('edit_city', $this->data);
    }

    public function update_state($id)
    {
	    $data = array('name'  => $this->input->post('state')); 
	    $update = $this->welcome->update_data($id,'state',$data);
	    if($update)
	    $this->session->set_flashdata('message', 'Your State updated Successfully.');
	    redirect('welcome/state');
    }

    public function update_city($id)
    {
	    $data = array('name'  => $this->input->post('city')); 
	    $update= $this->welcome->update_data($id,'cities',$data);
	    if($update)
	    $this->session->set_flashdata('message', 'Your City updated Successfully.');
	    redirect('welcome/city');
    }

    public function delete_state($id)
    {  
	    $delete = $this->data['delete_data']= $this->welcome->delete_data($id,'state',$data);
	    if($delete)
	    $this->session->set_flashdata('message', 'Your State deleted Successfully..');
	    redirect('welcome/state');
    }

    public function delete_city($id)
    {  
	    $delete = $this->data['delete_data']= $this->welcome->delete_data($id,'cities',$data);
	    if($delete)
	    $this->session->set_flashdata('message', 'Your City deleted Successfully..');
	    redirect('welcome/city');
    }

    public function add_city()
    {
    	$this->data['view_data']= $this->welcome->view_data('state');
        $this->load->view('add_city',$this->data);
    }

    public function insert_city()
    {
	    $data = array('state_id'  => $this->input->post('state'),
	                  'name'      => $this->input->post('city'));
	    
	    $insert = $this->welcome->insert_data($data,'cities');
	    if($insert)
	    $this->session->set_flashdata('message', 'Your City inserted Successfully..');
	    redirect('welcome/city');
    }

    public function city()
	{
		$this->data['state_data']= $this->welcome->view_data('state');
		$this->data['view_data']= $this->welcome->get_data(); 
	    $this->load->view('city',$this->data);
	}
}

?>
