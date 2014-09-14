<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends BRS_Controller {

	public function index()
	{
        $data['header'] = array('title' => 'Home');
        $data['data'] = array();
		$this->load->view(FRONTEND.'/home/home',$data);
	}
}