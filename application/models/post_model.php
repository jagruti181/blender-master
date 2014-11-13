<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Post_model extends CI_Model
{
	
	public function create($user,$type,$text,$totalshare,$designer,$image)
	{
		$data  = array(
			'user' => $user,
			'type' => $type,
			'text' => $text,
			'totalshare' => $totalshare,
			'designer' => $designer,
			'image' => $image
		);
		$query=$this->db->insert( 'post', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
	}
    
    public function profilepost($id)
    {
        $query="SELECT `user`.`id`,`user`.`firstname`,`user`.`lastname`,`user`.`email`,`user`.`uniquekey`,`user`.`contact`,`user`.`facebookuserid`,`user`.`points`,`post`.`id`,`post`.`type`,`post`.`text`,`post`.`image`,`post`.`timestamp`,`post`.`designer`,`designer`.`name`,`designer`.`image` as `proimage`
FROM `user`
LEFT OUTER JOIN `post` ON `post`.`user`=`user`.`id`
LEFT OUTER JOIN `designer` ON `designer`.`id`=`post`.`designer`
WHERE `user`.`id`='$id'";
	   
		$query=$this->db->query($query)->result();
		return $query;
    }
    
    public function profileuser($id)
    {
        $query="SELECT * FROM `user` WHERE `id`='$id'";
	   
		$query=$this->db->query($query)->row();
		return $query;
    }
    
    public function createtext($id,$text)
    {
        $data = array(
            'user' => '0',
            'type' => '1',
            'text' => $text,
            'designer' => $id
        );
        $query=$this->db->insert( 'post', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
    }
    
    public function createimage($id,$logo)
    {
        $data = array(
            'user' => '0',
            'type' => '1',
            'image' => $logo,
            'designer' => $id
        );
        $query=$this->db->insert( 'post', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
    }
    
	public function edit($id,$user,$type,$text,$totalshare,$designer,$image)
	{
		$data  = array(
			'user' => $user,
			'type' => $type,
			'text' => $text,
			'totalshare' => $totalshare,
			'designer' => $designer,
			'image' => $image
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'post', $data );
		return 1;
	}
	function viewpost()
	{
		$query="SELECT `post`.`id`, `post`.`user`, `post`.`type`, `post`.`text`, `post`.`image`, `post`.`totalshare`, `post`.`timestamp`, `post`.`designer`,`designer`.`name` AS `designername`,`user`.`firstname`,`user`.`lastname` 
FROM `post` 
LEFT OUTER JOIN `user` ON `user`.`id`=`post`.`user`
LEFT OUTER JOIN `designer` ON `designer`.`id`=`post`.`designer`";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
	function homepost()
	{
		$query="SELECT `designer`.`name`,`designer`.`content`,`designer`.`image` as `logo`,`post`.`id`,`post`.`text`,`post`.`image`,`post`.`totalshare`,`post`.`timestamp`,`post`.`designer`,`user`.`id` as `userid`,`user`.`firstname`,`user`.`lastname`,`user`.`logo` as `userlogo` FROM `post` LEFT OUTER JOIN `designer` ON `post`.`designer`=`designer`.`id` INNER JOIN `user` ON `user`.`id`=`post`.`user` ORDER BY `post`.`timestamp` DESC LIMIT 0,10";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
	function invitelist()
	{
		$query="SELECT `designer`.`name`,`designer`.`content`,`designer`.`image` as `logo`,`post`.`id`,`post`.`text`,`post`.`image`,`post`.`totalshare`,`post`.`timestamp`,`post`.`designer`,`user`.`id` as `userid`,`user`.`firstname`,`user`.`lastname`,`user`.`logo` as `userlogo` FROM `post` LEFT OUTER JOIN `designer` ON `post`.`designer`=`designer`.`id` INNER JOIN `user` ON `user`.`id`=`post`.`user` ORDER BY `post`.`timestamp` DESC LIMIT 0,20";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
    function viewsomepost()
	{
		$query="SELECT `post`.`id`, `post`.`user`, `post`.`type`, `post`.`text`, `post`.`image`, `post`.`totalshare`, `post`.`timestamp`, `post`.`designer`,`designer`.`name` AS `designername`,`user`.`firstname`,`user`.`lastname` 
FROM `post` 
LEFT OUTER JOIN `user` ON `user`.`id`=`post`.`user`
LEFT OUTER JOIN `designer` ON `designer`.`id`=`post`.`designer` LIMIT 0,12";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
    
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'post' )->row();
		return $query;
	}
    
	public function getpostimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `post` WHERE `id`='$id'")->row();
		return $query;
	}
	public function getisverifieddropdown()
	{
		$isverified= array(
			 "1" => "Yes",
			 "0" => "No",
			);
		return $isverified;
	}
	public function gettypedropdown()
	{
		$type= array(
			 "1" => "Free",
			 "0" => "Paid",
			);
		return $type;
	}
    
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Enabled",
			 "0" => "Disabled",
			);
		return $status;
	}
    
    public function getuserdropdown()
	{
		$query=$this->db->query("SELECT * FROM `user`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->firstname." ".$row->lastname;
		}
		
		return $return;
	}
    public function getpostdropdown()
	{
		$query=$this->db->query("SELECT * FROM `post`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->text;
		}
		
		return $return;
	}
    
	public function getlogobypostid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `post` WHERE `id`='$id'")->row();
		return $query;
	}
	
	function deletepost($id)
	{
		$query=$this->db->query("DELETE FROM `post` WHERE `id`='$id'");
	}
	function saveuserlog($id,$action)
	{
		$fromuser = $this->session->userdata('id');
		$data2  = array(
			'onuser' => $id,
			'fromuser' => $fromuser,
			'description' => $action,
		);
		$query2=$this->db->insert( 'userlog', $data2 );
	}
    function getinstagram()
    {
        $query=$this->db->query("SELECT * FROM `activity` WHERE `type`='1' ORDER BY `createdtime` DESC  LIMIT 0,30");
        return $query->result();
    }
    
}
?>