<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller 
{
	
	
	function index()
	{
		$data['page']="index";
        $data['posts']=$this->post_model->homepost();
		$this->load->view("webtemplate",$data);
	}
	function video()
	{
		$data['page']="video";
		$this->load->view("webtemplate",$data);
	}
    function profilee()
	{
        if(!$this->session->userdata('logged_in'))
        {
            redirect(site_url("website/login"), 'refresh');
        }
		$user=$this->user_model->authenticate();
        $data['page']="profile";
        $data['posts']=$this->post_model->profilepost($user['id']);
        $data['user']=$this->post_model->profileuser($user['id']);
		$this->load->view("webtemplatenonhome",$data);
	}
    function invitelist()
	{
		$data['page']="invitelist";
        $data['posts']=$this->post_model->invitelist();
        $data["nobackbackground"]="style-blender";
		$this->load->view("webtemplatenonhome",$data);
	}
    function profilein()
    {
        $user=$this->user_model->authenticate();
        $data['page']="profile";
        $data['posts']=$this->post_model->profilepost($user->id);
		$this->load->view("webtemplate",$data);
    }
    function blenderstyle()
	{
		$data['page']="blenderstyle";
        $data['posts']=$this->designer_model->viewdesigner();
        $data["nobackbackground"]="true";
		$this->load->view("webtemplatenonhome",$data);
	}
    function profile()
	{
        
		$data['page']="profilepage";
        $data['before']=$this->designer_model->beforeedit($this->input->get('id'));
		$this->load->view("webtemplatenonhome",$data);
	}
    function textpost()
    {
        $data['page']="profileedit";
        $id=$this->input->post('id');
        $text=$this->input->post('text');
        if($this->post_model->createtext($id,$text)==0)
			redirect(site_url("/website/profileedit?id=".$id));
			else
			redirect(site_url("/website/profileedit?id=".$id));
        $this->load->view("webtemplate",$data);
    }
    function imagepost()
    {
        $data['page']="profileedit";
        $id=$this->input->post('id');
        $config['upload_path'] = './webassets/img';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
			}
        if($this->post_model->createimage($id,$logo)==0)
			redirect(site_url("/website/profileedit?id=".$id));
			else
			redirect(site_url("/website/profileedit?id=".$id));
        $this->load->view("webtemplate",$data);
    }
    function profileedit()
	{
        if(!$this->session->userdata('logged_in'))
        {
            redirect(site_url("website/login"), 'refresh');
        }
		$data['page']="profileedit";
        $data['before']=$this->designer_model->beforeedit($this->input->get('id'));
		$this->load->view("webtemplatenonhome",$data);
	}
    function schedule()
	{
        
		$data['page']="schedule";
        //$data['before']=$this->designer_model->beforeedit($this->input->get('id'));
        $data["nobackbackground"]="schedule";
		$this->load->view("webtemplatenonhome",$data);
	}
    
    function register()
    {
        $data['page']="register";
		$this->load->view("webtemplatenonhome",$data);
    }
    
    function registeruser()
    {
        
        $this->form_validation->set_rules('name','Name','trim|required|max_length[3]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('city','City','trim|max_length[30]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE)	
		{
            redirect(site_url("/website/register"));
        }else{
        $name=$this->input->get_post('name');
        $email=$this->input->get_post('email');
        $city=$this->input->get_post('city');
        $day=$this->input->get_post('day');
        $month=$this->input->get_post('month');
        $year=$this->input->get_post('year');
        $sex=$this->input->get_post('sex');
        $password=$this->input->get_post('password');
        
        $config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
			}
        if($this->user_model->registeruser($name,$email,$city,$day,$month,$year,$sex,$password,$logo)==0)
			redirect(site_url("/website/register"));
			else
			redirect(site_url("/"));
        $this->load->view("webtemplate",$data);
        }
    }
    
    function profilepage()
	{
        
		$data['page']="profilepage";
//        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplate",$data);
	}
    function login()
	{
        
        if($this->session->userdata('logged_in'))
        {
            redirect(site_url("website/profilee"), 'refresh');
        }
        
		$data['page']="login";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    
    function resetpswd()
	{
		$data['page']="resetpswd";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function resetlogin()
	{
		$data['page']="resetlogin";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function resetemail()
	{
		$data['page']="resetemail";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function resethome()
	{
		$data['page']="resethome";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function thankyou()
	{
		$data['page']="thankyou";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function termscondition()
	{
		$data['page']="termscondition";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function facebooklogin()
    {
        $id=$this->input->get_post('id');
        $firstname=$this->input->get_post('firstname');
        $lastname=$this->input->get_post('lastname');
        $email=$this->input->get_post('email');
        $image=$this->input->get_post('image');
        $data['message']=$this->user_model->facebooklogin($id,$firstname,$lastname,$email,$image);
		$this->load->view("json",$data);
    }
   
    function twitterlogin()
    {
        // $id=$this->input->get_post('id');
        // $screenname=$this->input->get_post('screenname');
        $data['message']=$this->user_model->twitterlogin();
		$this->load->view("json",$data);
    }
    function twittershare()
    {
        $points=$this->input->get_post('points');
        $data['message']=$this->user_model->twittershare($points);
		$this->load->view("json",$data);
    }
    function facebookpoints()
    {
        $points=$this->input->get_post('points');
        $data['message']=$this->user_model->facebookpoints($points);
		$this->load->view("json",$data);
    }
    public function authenticate()
    {
        $data['message']=$this->user_model->authenticate();
        $this->load->view('json',$data);
    }
    public function normallogin()
    {
        $email=$this->input->get_post('email');
        $password=$this->input->get_post('password');
        if($this->user_model->normallogin($email,$password)==0)
        {
            redirect(site_url("/website/login"));
        }
        else {
            redirect(site_url("/"));
        }
        $this->load->view('json',$data);
    }
    
    public function facebookshare()
    {
        $data["url"]=$this->input->get("url");
        $data["title"]=$this->input->get("title");
        $data["des"]=$this->input->get("des");
        $data["img"]=$this->input->get("img");
        $this->load->view("facebookshare",$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("/"));
        $data['json']=true;
    }
}