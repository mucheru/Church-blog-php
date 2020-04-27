 <?php

class Posts extends CI_Controller{
	public function index(){
 $data['title'] = 'Latest Posts';
 $data['posts'] = $this->post_model->get_posts();

 				 

 $this->load->view('templates/header');
 $this->load->view('posts/index', $data);
 $this->load->view('templates/footer');


	}

	public function view($slug = NULL){
		$data['post'] = $this->post_model->get_posts($slug);
		if(empty($data['post'])){
			show_404();

		}

		$data['title']= $data['post']['title'];

		$this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');

	}

	public function create(){

		//check log in

		if(!$this->session->userdata('logged_in')){

			redirect('index.php/users/login');


		}

		$data['title']= 'Create Post';
		$this->form_validation->set_rules('title','Title','required');

		$this->form_validation->set_rules('body','Body','required');
		if($this->form_validation->run()===False){

		$this->load->view('templates/header');
        $this->load->view('/posts/create', $data);
        $this->load->view('templates/footer');

		}else{

			$this->post_model->create_post();
//set  message

		 	$this->session->set_flashdata('post_created','your post has been created');

			redirect('index.php/posts');
		}


	}

	public function delete($id){

		//If not logged in no deletion

		if(!$this->session->userdata('logged_in')){

			redirect('index.php/users/login');


		}

	$this->post_model->delete_post($id);
//set  message

		 	$this->session->set_flashdata('post_deleted','Your post has been deleted ');

	redirect('index.php/posts');

	}

	public function edit($slug){

		//If not logged in no editing

		if(!$this->session->userdata('logged_in')){

			redirect('index.php/users/login');


		}

		$data['post'] = $this->post_model->get_posts($slug);
		if(empty($data['post'])){
			show_404();

		}

		$data['title']= 'Edit Post';

		$this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');

	}

	public function update(){
		//If not logged in no deletion
if(!$this->session->userdata('logged_in')){

			redirect('index.php/users/login');


		}
		
		$this->post_model->update_post();

//set  message

		 	$this->session->set_flashdata('post_updated','Your post has been updated');

		redirect('index.php/posts');


	}
}

