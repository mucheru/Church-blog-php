<?php 
   class Email_controller extends CI_Controller {  
         
  
      public function send_mail() { 
    //check form validation
   $this->form_validation->set_rules('firstname', 'firstname','required');      
   $this->form_validation->set_rules('lastname', 'lastname', 'required');
   $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
   $this->form_validation->set_rules('subject', 'Subject', 'required');


   if($this->form_validation->run()===FALSE){
         $this->load->view('templates/header');
         $this->load->view('pages/contactus');
         $this->load->view('templates/footer');

      }else{

  $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => '465',
  'smtp_user' => 'stephenmucheru79@gmail.com', // change it to yours
  'smtp_pass' => '0721447279', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
     // $message = 'thank you for contacting redemeed gospel.we will contact you';
   $message = $this->input->post('subject');
   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");
      //$this->email->from('stephenmucheru79@gmail.com'); // change it to yours
   $this->email->to('stephenmucheru79@gmail.com');// change it to yours
   $this->email->from($this->input->post('email'));

      $this->email->subject('Redemed');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }
         

  }
} 
} 
?>
