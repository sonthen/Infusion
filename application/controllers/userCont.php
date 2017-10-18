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

    //for get userpage after user login
        public function userpage(){

            if ($_SESSION['user_logged'] == FALSE){
                $this->session->set_flashdata("error", "Please login first to view this page!! ");
                redirect("authCont/login");
        }
                $this->load->view('dashboardView', 'refresh');

        }

		public function dashboardview() {
                       
                $this->load->model('Getter');
                $data['dashboard_content'] = $this->Getter->get_dash_content();                 
                $this->load->view('dashboardView', $data);
		
        }

        public function emailcampaign() {
            
            $this->load->model('Getter');
            $data['label_content'] = $this->Getter->get_label();                 
            $this->load->view('newemailcampaignView', $data);

        }
        
        // public function danieltest()
        // {
        //     $this->load->model('Getter');
        //     $data['kirim_content'] = $this->Getter->get_cobakirim();
        //     $this->load->view('daniel_test/sequence_test.php', $data);
        // }


       

        public function emailform(){
            $this->load->view('emailformView');
        }

        public function smscampaign(){
            $this->load->view('newsmscampaignView');
        }

        //test function
        public function addCampaign(){    
            
            $newCampaign = [ 
            'campaign_name' => $this->input->post('campaign_name'),
            'sequence_qty' => $this->input->post('sequence_qty'),
            'label_id' => $this->input->post('label_id'),
            'type' => $this->input->post('1'),
            'status' => $this->input->post('0'),
            ];
                    
            $this->db->insert('campaigns',$newCampaign);

            redirect('userCont/dashboardview', 'refresh');
            
        }

        public function smsform(){
            $this->load->view('smsformView');
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

        // campaign form here!!---------------
        public function newemailcampaign(){
                         $this->load->view('newemailcampaignView', 'refresh');
        }



        
        
        public function campaignregist(){
            //this for validation
          //   if (isset($_POST['campaignregist'])){
          //     $this->form_validation->set_rules('campaign_name', 'campaign name', 'required|is_unique');
          //     $this->form_validation->set_rules('sequence_qty', 'sequence qty', 'required');
          //     $this->form_validation->set_rules('label_id', 'label id', 'required');
              

          //     if ($this->form_validation->run() == TRUE){
          //                 echo 'form validated';
              $newcampaign = [
                  'campaign_name' =>$this->input->post('campaign_name'),
                  'sequence_qty'=>$this->input->post('sequence_qty'),
                  'label_name' =>$this->input->post('label_name'),
                  'status' =>$this->input->post('status'),
                  'type' =>$this->input->post('type'),
                   'created_at'=>date('Y-m-d')
              ];
              $this->db->insert('campaigns', $newcampaign);
      //     }
      // }
          $this->load->view('newemailcampaignView','refresh');
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
            $this->load->model('model_barang');
            $kode_barang = $this->uri->segment(3);
            $data['barang'] = $this->model_barang->getBarang($kode_barang)->row_array();
            // $this->load->view('edit_barang',$data); lari ke view editor
        }
    
        function edit_data(){
            $id = $this->input->post('id');
            $newData = ['kode_barang' => $this->input->post('kode_barang'),
                        'nama_barang' => $this->input->post('nama_barang'),
                        'price' => $this->input->post('price')
        ];
        $this->db->where('kode_barang',$id);
        $this->db->update('barang',$newData);
    
        redirect('barang');
        }

}
