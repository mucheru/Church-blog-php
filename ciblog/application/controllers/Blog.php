<?php
class Blog extends CI_Controller {

        public function index()
        {
                echo 'Redeemed Gospel church';
                
                 $this->load->view('blogview');
        }
        public function comments()
        {
                echo 'Look at this!';
        }
}