<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userCont extends CI_Controller {

	//set as default
	public function __construct(){

        parent::__construct();
        if ($_SESSION['user_logged'] == FALSE){
            $this->session->set_flashdata("error", "Please login first to view this page!! ");
            redirect("authCont/login");
        }
    }

    //to get dashboard after user login
		public function dashboardview() {
            if ($_SESSION['user_logged'] == FALSE){
                $this->session->set_flashdata("error", "Please login first to view this page!! ");
                redirect("authCont/login");
            }

            $this->load->model('Getter');
            $data['dashboard_content'] = $this->Getter->get_dash_content();
            $this->load->view('dashboardView', $data);
       
        }

        function emailform(){
            $this->load->view('sequenceform');
        }
        

        public function emailcampaign() {

            $this->load->model('Getter');
            $data['label_content'] = $this->Getter->get_label();
            $this->load->view('newemailcampaignView', $data);

        }


        public function smscampaign(){
            $this->load->view('newsmscampaignView');
        }


        public function toggle() {

                $this->load->model('Getter');

                $id= $this->uri->segment(3);
                $status= $this->uri->segment(4);
                $data['dashboard_content'] = $this->Getter->get_campaign($id);

                if($status==0){
                    $newStat = ['status' => 1];
                }
                else{
                    $newStat = ['status' => 0];
                }
                $this->db->where('id',$id);
                $this->db->update('campaigns',$newStat);
                redirect('userCont/dashboardview');

        }
        
        // this is for add newcampaign to database
        public function addCampaign(){

            if (isset($_POST['addCampaign'])){
            $this->form_validation->set_rules('campaign_name', 'campaign name', 'required|is_unique[campaigns.campaign_name]');
            $this->form_validation->set_rules('sequence_qty', 'sequence quantity', 'required|integer');
            $this->form_validation->set_rules('label_id', 'label id', 'required');

            			//if form validation true
			if ($this->form_validation->run() == TRUE){
            
              $newcampaign = [
                  'campaign_name' =>$_POST['campaign_name'],
                  'sequence_qty'=>$_POST['sequence_qty'],
                  'label_id' =>$_POST['label_id'],
                    'created_at'=>date('Y-m-d')
              ];
              
                $this->db->insert('campaigns', $newcampaign);
                redirect('userCont/emailform','refresh');
                
           }
           
        }       
           
        //for load data categoryat view
        $this->load->model('Getter');
        $data['label_content'] = $this->Getter->get_label();                 
        $this->load->view('newemailcampaignView', $data);     

      }


        public function sequenceform(){                        
                        $this->load->view('sequenceform', 'refresh');
        }

        public function sequencetest(){
                        $this->load->view('daniel_test/sequence_test','refresh');
        }


		function edit(){
	        //maka dia akan print nama functionnya
	        // echo $this->uri->segment(2);
	        $this->load->model('Getter');
	        $id = $this->uri->segment(3);

            $data['campaign'] = $this->Getter->edit_campaign($id);
            $data['label'] = $this->Getter->get_label();
	        $this->load->view('editEmailCampaign',$data);

	    }

        function edit_data(){
            $id = $this->input->post('id');
						$newcampaign = [
								'campaign_name' =>$this->input->post('campaign_name'),
								'sequence_qty'=>$this->input->post('sequence_qty'),
								'label_id' =>$this->input->post('label_id'),
						];
        $this->db->where('id',$id);
        $this->db->update('campaigns',$newcampaign);
        }

}
