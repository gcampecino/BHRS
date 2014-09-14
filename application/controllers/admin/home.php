<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends BRS_Controller {

	public function index()
	{
        $data['header'] = array('title' => 'Admin Home');
        $data['data'] = array();
		$this->load->view(BACKEND.'/home/home',$data);
	}
}