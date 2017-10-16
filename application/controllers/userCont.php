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

<<<<<<< HEAD
		public function dashboardview() {
                       
                $this->load->model('Getter');
                $data['dashboard_content'] = $this->Getter->get_dash_content();                 
                $this->load->view('dashboardView', $data);
		
        }       
       

        public function emailform(){
            $this->load->view('sequenceform');
        }
=======
        }

        public function emailcampaign() {

            $this->load->model('Getter');
            $data['label_content'] = $this->Getter->get_label();
            $this->load->view('newemailcampaignView', $data);

        }

>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719

        public function smscampaign(){
            $this->load->view('newsmscampaignView');
        }

<<<<<<< HEAD

        public function smsform(){
            $this->load->view('sequenceform');
        }
=======
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719

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
<<<<<<< HEAD
        
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
=======







        public function campaignregist(){
            $newcampaign = [
                'campaign_name' =>$this->input->post('campaign_name'),
                'sequence_qty'=>$this->input->post('sequence_qty'),
                'label_name' =>$this->input->post('label_name'),
                'status' =>$this->input->post('status'),
                'type' =>$this->input->post('type'),
                'created_at'=>date('Y-m-d')
            ];
            $this->db->insert('campaigns', $newcampaign);

            $this->load->view('newemailcampaignView','refresh');
        }


        public function sequenceform(){
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719
                        $this->load->view('sequenceform', 'refresh');
        }

        public function sequencetest(){
                        $this->load->view('daniel_test/sequence_test','refresh');
        }
<<<<<<< HEAD
                            
=======


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
								'label_name' =>$this->input->post('label_name'),
						];
        $this->db->where('id',$id);
        $this->db->update('campaign',$newcampaign);

        $this->load->view('editEmailCampaign','refresh');
        }
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719

}
