<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

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

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('book_model');

	 		 if (!isset($this->session->userdata['user_nama'])) {
  				redirect(base_url().'login');
  			}
	 	}


	public function index()
	{

		$data['books']=$this->book_model->getNews();
		$data['category']=$this->book_model->getCategory();
		// $data['books']=$this->book_model->joinPopularPost();
		$this->load->view('book_view',$data);
	}


	public function pageAll()
	{

		$data['books']=$this->book_model->get_all_post();
		$data['category']=$this->book_model->getCategory();
		// $data['books']=$this->book_model->joinPopularPost();
		$this->load->view('all_view',$data);
	}

	public function pageAttachment()
	{
		$id = 'attachment';

		$data['books']=$this->book_model->getPost($id);
		$data['category']=$this->book_model->getCategory();
		$this->load->view('attachment_view',$data);
	}
		public function pageBubblingup()
	{
		$id = 'bubbling-up';

		$data['books']=$this->book_model->getPost($id);
		$this->load->view('bubblingup_view',$data);
	}
	// start
		public function pageDj()
	{
		$id = 'dj';

		$data['books']=$this->book_model->getPost($id);
		$data['category']=$this->book_model->getCategory();
		$this->load->view('dj_view',$data);
	}
		public function pageMeme()
	{
		$id = 'meme';

		$data['books']=$this->book_model->getPost($id);
		$data['category']=$this->book_model->getCategory();
		$this->load->view('meme_view',$data);
	}
		public function pageMusicProgram()
	{
		$id = 'music-programs';

		$data['books']=$this->book_model->getPost($id);
		$data['category']=$this->book_model->getCategory();
		$this->load->view('musicPrograms_view',$data);
	}
		public function pageNews()
	{
		$id = 'news';

		$data['books']=$this->book_model->getPost($id);
		$this->load->view('news_view',$data);

		$data['category']=$this->book_model->getCategory();
	}
		public function pagePage()
	{
		$id = 'page';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('page_view',$data);
	}
		public function pagePost()
	{
		$id = 'post';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('post_view',$data);
	}
		public function pageQuiz()
	{
		$id = 'quiz';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('quiz_view',$data);
	}
		public function pageRevision()
	{
		$id = 'revision';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('revision_view',$data);
	}
		public function pageStation()
	{
		$id = 'stations';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('stations_view',$data);
	}
		public function pageSudutDengar()
	{
		$id = 'sudut-dengar';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('sudutDengar_view',$data);
	}
		public function page_wp_posts_wpcf7_contact()
	{
		$id = 'wpcf7_contact_form';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('wpcf7_contact_form_view',$data);
	}
		public function pageConcertAndEvent()
	{
		$id = 'concert-and-event';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('concertAndEvent_view',$data);
	}
		public function pagePrograms()
	{
		$id = 'programs';

		$data['books']=$this->book_model->getPost($id);

		$data['category']=$this->book_model->getCategory();
		$this->load->view('programs_view',$data);
	}
		public function category()
	{


		$data['books']=$this->book_model->getCategory();
		
		$data['category']=$this->book_model->getCategory();
		$this->load->view('category_view',$data);
	}

	// end


// category


	// newsletter subscrib

		public function emailSub()
	{


		$data['books']=$this->book_model->getNewsletter();
		$this->load->view('emailSub_view',$data);
	}

	// end newsletter subscript



	public function category_add()
		{
			$data = array(
					'ID' => mt_rand(3213,12312),
					'Category' => $this->input->post('category'),
					'Date' => date("Y/m/d h:i:s"),
				);
			$insert = $this->book_model->category_add($data);
			echo json_encode(array("status" => TRUE));
		}


		public function category_update()
		{
		$data = array(
					'ID' => mt_rand(3213,12312),
					'Category' => $this->input->post('category'),
					'Date' => date("Y/m/d h:i:s"),
			);
		$this->book_model->category_update(array('ID' => $this->input->post('ID')), $data);
		echo json_encode(array("status" => TRUE));
		}

		public function category_edit($id)
		{
			$data = $this->book_model->category_get_by_id($id);



			echo json_encode($data);
		}

// end category






	public function book_add()
		{

	 		$editor_data = $_POST[ 'editor1' ];
			$data = array(
					'id' => null,
					'post_date' => date("Y/m/d h:i:sa"),
					'post_date_gmt' => date("Y/m/d h:i:s"),
					'post_type' => $this->input->post('post_type'),
					'post_title' => $this->input->post('post_title'),
					'post_content' => $this->input->post('editor1'),
				);
			$insert = $this->book_model->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
			public function ajax_edit($id)
		{
			$data = $this->book_model->get_by_id2($id);



			echo json_encode($data);
		}

			

	public function book_update()
		{
		$data = array(
					'ID' => $this->input->post('ID'),
					'post_date' => date("Y/m/d h:i:sa"),
					'post_date_gmt' => date("Y/m/d h:i:s"),
					'post_type' => $this->input->post('post_type'),
					'post_title' => $this->input->post('post_title'),
			);
		$this->book_model->book_update(array('ID' => $this->input->post('ID')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	public function post_type(){
		$data = $this->book_model->show_post_type();
		echo json_encode($data);



		


	}


	// management user 




	public function managementUserAdd()
		{

			$data = array(
					'id' => NULL,
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'credential' => $this->input->post('status'),
				);
			$insert = $this->book_model->managementUserAdd($data);
			echo json_encode(array("status" => TRUE));
		}

	public function managementUser()
		{

		$data['books']=$this->book_model->getUserManagement();
		// $data['category']=$this->book_model->getCategory();
		// $data['books']=$this->book_model->joinPopularPost();
		$this->load->view('managementUser_view',$data);
		}

	// end


		// iplogs


				public function ipLogs()
		{
		$date1 = date('Y/m/d', time() - 2592000);
		$date2 = date('Y/m/d');
		$data['books']=$this->book_model->getipLogs($date1,$date2);
		// $data['category']=$this->book_model->getCategory();
		// $data['books']=$this->book_model->joinPopularPost();
		$this->load->view('ipLogs_view',$data);
		}


		public function changeipLogs($date1,$date2)
		{
		$data['books']=$this->book_model->getipLogs($date1,$date2);
		// $data['category']=$this->book_model->getCategory();
		// $data['books']=$this->book_model->joinPopularPost();
		$this->load->view('ipLogs_view',$data);
		}


		//end

		// music-chart


			public function show_music_chart(){

				        header('Access-Control-Allow-Origin: *');


					echo json_encode($this->book_model->show_music_chart());

			}


		// end


}
