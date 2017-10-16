<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class smtpemailCont extends CI_Controller {

    
    function index()
    {
        $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'verdanielat@gmail.com', 
      'smtp_pass' => '', 
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
            $kirimsiapa = 'ryanhenry@gmail.com';
            $message = 'ouyeeeeaaahhh';
            $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('verdanielat@gmail.com','admin'); 
          $this->email->to($kirimsiapa);
          $this->email->subject('This is Campaign from Kiosoon wkwkwk');
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

