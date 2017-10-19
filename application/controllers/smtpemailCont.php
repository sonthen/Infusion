<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class smtpemailCont extends CI_Controller {

    public function sequenceform(){
        $this->load->model('Getter');
        $data['data'] = $this->Getter->get_cobakirim();
        $this->load->view('daniel_test/sequence_test', $data);
}
    function kuykirimemail()
    {
        $this->load->model('Getter');
        $data = $this->Getter->get_cobakirim();
        foreach($data as $k){
        $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_port' => 465,
      'smtp_user' => 'verdanielat@gmail.com',   //<----- type your own email
      'smtp_pass' => '', //and your password
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    
    

        
            $subject=$_POST["subject"];
            $body=$_POST["body"];
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('verdanielat@gmail.com','admin'); // <--type your own email again
          $this->email->subject($subject);
          $this->email->message($body);
          $this->email->to($k["email"]);
    
          if($this->email->send())
         {
          echo 'TERKIRIM SUDAH.';
         }
         else
        {
         show_error($this->email->print_debugger());
        }

    }
        
    }

    

}

