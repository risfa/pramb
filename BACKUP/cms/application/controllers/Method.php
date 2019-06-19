<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Method extends CI_Controller {

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
	 		
	 		$this->load->model('book_model');
			
	 	}


	public function index()
	{

		// $data['books']=$this->book_model->getNews();
		// $data['category']=$this->book_model->getCategory();
		// // $data['books']=$this->book_model->joinPopularPost();
		// $this->load->view('book_view',$data);
	}

		// music-chart

			public function show_music_chart(){

					        header('Access-Control-Allow-Origin: *');

					echo json_encode($this->book_model->show_music_chart());

			}


		// end

			// wadyabala

						public function show_wadyabala(){

					        header('Access-Control-Allow-Origin: *');

					echo json_encode($this->book_model->show_wadyabala());

			}


			// end


}
