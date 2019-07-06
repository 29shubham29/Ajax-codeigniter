<?php

class register extends CI_Model
{

	function signup($post)
	{
		$data = [
				'name' => $post['name'],
			'username'=> $post['username'],
			'password' => md5($post['password']),
			'gender' => $post['level']
				];
		$q = $this->db->insert('user_details',$data);
		return $q;
	}

	function userverify($post)
	{
		$pass = md5($post['password']);
		$q= $this->db->where('username',$post['username'])->where('password',$pass)->get('user_details');
		if ($q->num_rows()>0) {
			$x= $q->result_array();
			return array_pop($x);
		}else{
			return false;
		}
	}

	// function getuser()
	// {
	// $q = $this->db->get('tbl_message');
	// return $q->result_array();
	// }
	// function getcategory()
	// {
	// 	$q = $this->db->get('categories');
	// 	$z = $q->result_array();
	// 	return $z;
	// }
	function personal($post)
	{
		$data=[
				'user_id'=>$post['uid'],
				'name'=>$post['name'],
				'bio'=>$post['bio'],
				'dob'=>$post['dob'],
				'status'=>$post['status'],
				'hobby'=>$post['hobby']
				];
		$q= $this->db->insert('personal', $data);
		return $q;
	}
	function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("personal");
		if($query!= '')
		{
			$this->db->like('name',$query);
			$this->db->or_like('hobby',$query);
			$this->db->or_like('status',$query);
			$this->db->or_like('bio',$query);
			$this->db->or_like('dob',$query);
		}
		$this->db->order_by('id','DESC');
		return $this->db->get();
	}
	}
