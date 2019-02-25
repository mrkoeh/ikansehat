<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   
   public function __construct(){
    parent::__construct();
	if (!$this->session->userdata('username'))
	{
		redirect(base_url());
	}

 }


    public function index()
  {
    $this->template->load('admin/admin_template','admin/home_template'); 
  }

}