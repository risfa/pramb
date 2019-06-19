<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model
{

	var $table = 'wp_posts';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	// login


	public function login($data)
	{

		$this->db->from('users');
		$this->db->where('username','admin');
		$query=$this->db->get();
		return $query->row();
	}




	public function get_all_post()
	{

		$this->db->order_by('post_date', 'desc');
		$this->db->from('wp_posts');
		$this->db->limit(10,100);
		// $this->db->where('post_type','news');
		// $this->db->join('wp_popularpostsdata', 'wp_posts.ID = wp_popularpostsdata.postid', 'left outer'); 
		$query=$this->db->get();
		return $query->result();
	}

	// public function joinPopularPost()
	// {

	// 	$this->db->join('wp_popularpostsdata', 'wp_posts.ID = wp_popularpostsdata.postid', 'inner'); 
	// 	$query = $this->db->get('wp_posts');
	// 	return $query->result();

	// }


	public function getUserManagement()
	{

		$this->db->from('users');
		$query=$this->db->get();
		return $query->result();
	}

	public function getipLogs($from,$until)
	{

		$this->db->from('ip');
		$this->db->where('vote_date >=', $from);
		$this->db->where('vote_date <=', $until);
		$query=$this->db->get();
		return $query->result();
	}


	public function getNews()
	{
		$this->db->from('wp_posts');
		$this->db->where('post_type','news');
		$this->db->join('wp_popularpostsdata', 'wp_posts.ID = wp_popularpostsdata.postid','left outer'); 
		$query=$this->db->get();
		return $query->result();
	}


	public function getPost($id)
	{

		$this->db->from('wp_posts');
		$this->db->where('post_type',$id);
		$this->db->join('wp_popularpostsdata', 'wp_posts.ID = wp_popularpostsdata.postid','left outer'); 
		$query=$this->db->get();
		return $query->result();
	}

	public function getCategory()
	{

		$this->db->from('category');
		$query=$this->db->get();
		return $query->result();

	}


		public function getNewsletter()
	{

		$this->db->from('wp_eemail_newsletter_sub');
		$query=$this->db->get();
		return $query->result();

	}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('ID',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_by_id2($id)
	{
		$this->db->select('t1.*, t2.Category');
		$this->db->from('wp_posts AS t1, category AS t2');
		$this->db->where('t1.ID',$id);
		$query = $this->db->get();

		return $query->row();
	}


	// category

	public function category_get_by_id($id)
	{
		$this->db->from('category');
		$this->db->where('ID',$id);
		$query = $this->db->get();

		return $query->row();
	}


	public function category_add($data)
	{
		$this->db->insert('category', $data);
		return $this->db->insert_id();
	}

	public function category_update($where, $data)
	{
		$this->db->update('category', $data, $where);
		return $this->db->affected_rows();
	}


	// end category

	public function book_add($data)
	{
		$this->db->insert('wp_posts', $data);
		return $this->db->insert_id();
	}

	public function book_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete($this->table);
	}

	public function show_post_type(){
		 $this->db->select('category');
		$this->db->from('category');
    	return $this->db->get()->result();



		// $this->db->from('category');
		// $this->db->where('Category','dj');
		// $query=$this->db->get();
		// return $query->result();


	}


	// management user


			public function managementUserAdd($data)
	{
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	// end



		// music-chart

			public function show_music_chart(){


					$this->db->from('music_chart');
					// $this->db->where('post_type','news');
					$query=$this->db->get();
					return $query->result_array();

			}


		// end


			// wadyabala



			public function show_wadyabala(){


					$this->db->from('wadyabala');
					// $this->db->where('post_type','news');
					$query=$this->db->get();
					return $query->result_array();

			}
				
			//en


}
