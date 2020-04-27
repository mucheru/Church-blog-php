<?php

class Users extends CI_Controller{

	//Register user

	public function register(){
		 $data['title'] = 'Sign up';

		 $this->form_validation->set_rules('name', 'Name','required');
		 $this->form_validation->set_rules('username', 'Username','required|callback_check_username_exists');
		 $this->form_validation->set_rules('email', 'Email','required');
		 $this->form_validation->set_rules('password', 'Password','required');
		 $this->form_validation->set_rules('password2', 'Confirm Password','matches[password]');


		 if($this->form_validation->run()===FALSE){
		 	$this->load->view('templates/header');
		 	$this->load->view('users/register',$data);
		 	$this->load->view('templates/footer');



		 }else{

          //Encript password

		 	$enc_password = md5($this->input->post('password'));

		 	$this->user_model->register($enc_password);

		 	//set  message

		 	$this->session->set_flashdata('user_registered','you are now registered and can log in');

		 	redirect('/index.php/posts');

		 }

	}

	//log in user
public function login(){
		 $data['title'] = 'Sign In';
		 $this->form_validation->set_rules('username', 'Username','required');
		 $this->form_validation->set_rules('password', 'Password','required');


		 if($this->form_validation->run()===FALSE){
		 	$this->load->view('templates/header');
		 	$this->load->view('users/login',$data);
		 	$this->load->view('templates/footer');



		 }else{
            //Get the username:

            $username = $this->input->post('username');

            //Get the encripted password:
            $password = md5($this->input->post('password'));

            //Login user

            $user_id = $this->user_model->login($username, $password);

            if($user_id){
            //create session

             $user_data = array(
              'user_id' => $user_id,
              'username' => $username,
              'logged_in'=> true
                
             	);

             $this->session->set_userdata($user_data);
            	 //set  message

            		$this->session->set_flashdata('user_loggedin','you are now logged in');

		 	         redirect('/index.php/posts');
            

            }else{		 



            //set  message

            		$this->session->set_flashdata('login_failed','log in is invalid');

		 	        redirect('/index.php/users/login');
            
            }
      
	 

		 }

	}

//log user out

	public function logout(){

		//unset user data

		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

        $this->session->set_flashdata('user_loggedout','you are loged out');

          redirect('/index.php/users/login');
  


	}


	//check if username exist
	public function check_username_exists($username){

		$this->form_validation->set_message('check_username_exists','that username is taken.Please choose a different one');

		if($this->user_model->check_username_exists($username)){

			return true;


		}else{
             
             return false;

		}


	}
}