<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller 
{
	
	
	function index()
	{
		$data['page']="index";
        $data['posts']=$this->post_model->homepost();
		$this->load->view("webtemplate",$data);
	}
    function invitelist()
	{
		$data['page']="invitelist";
        $data['posts']=$this->post_model->invitelist();
		$this->load->view("webtemplate",$data);
	}
    function blenderstyle()
	{
		$data['page']="blenderstyle";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplate",$data);
	}
}