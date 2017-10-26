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

            $this->load->model('Getter');
            $data['dashboard_content'] = $this->Getter->get_dash_content();

            $this->load->view('dashboardView', $data);

        }



        // ################### sampai sini ####################
        function add_sequence_container($parent_cont_id){
            $id_campaign = $this->uri->segment(3);
            $parent_lvl = $this->Getter->parent_container_lvl($_POST['container_parent']);
            // $new_container_lvl= $parent_lvl[0]['lvl']+1;
            print_r($parent_lvl);
            // $newsequencecontainer = [
            //     'campaign_id' =>$id_campaign,
            //     'container_parent_id' =>$_POST['container_parent'],
            //     'sequence_container_name' =>$_POST['sequence_container_name'],
            //     'lvl' =>$new_container_lvl,
            //     'label_id'=>$_POST['label_id']
            // ];

            //   $this->db->insert('sequence_container', $newsequencecontainer);
            //   redirect('userCont/mencoba/'.$id_campaign);
        }
// &&&&&&&&&&&&
        function delete_sequence_container(){
            $id_campaign = $this->uri->segment(3);
            $id_sequence_container = $this->uri->segment(4);

            $this->load->model('Getter');
            $this->Getter->delete_sequence_container($id_sequence_container);

            redirect("usercont/mencoba/".$id_campaign);
        }

        function add_sequence(){
            $id_campaign = $this->input->post('id_campaign');
            $id_container =$this->uri->segment(4);

            $newsequence = [
                'container_id' =>$id_container,
                'sequence_name' =>$_POST['sequence_name'],
                'parent_id' =>$_POST['parent_id'],
                'delay' =>$_POST['delay'],
                'value_1'=>$_POST['value_1'],
                'value_2' =>$_POST['value_2']
            ];

              $this->db->insert('sequences', $newsequence);
              redirect('userCont/mencoba/'.$id_campaign);

        }
        function edit_sequence(){
            $id_campaign = $this->input->post('id_campaign');
            $id_sequence =$this->uri->segment(4);
                $editedsequence = [
                    'parent_id' =>$this->input->post('parent_id'),
                    'delay' =>$this->input->post('delay'),
                    'value_1' =>$this->input->post('value_1'),
                    'value_2' =>$this->input->post('value_2')
                ];
            $this->db->where('id',$id_sequence);
            $this->db->update('sequences',$editedsequence);

            redirect("usercont/mencoba/".$id_campaign);
        }
        function delete_sequence(){
            $id_campaign = $this->uri->segment(3);
            $id_sequence = $this->uri->segment(4);

            $this->load->model('Getter');
            $this->Getter->delete_sequence($id_sequence);

            redirect("usercont/mencoba/".$id_campaign);
        }




        function edit_campaign(){
            $id = $this->input->post('id');
                $newcampaign = [
                    'campaign_name' =>$this->input->post('campaign_name')
                ];
            $this->db->where('id',$id);
            $this->db->update('campaigns',$newcampaign);

            redirect("usercont/mencoba/".$id);
        }
        function delete_campaign(){
            $id_campaign = $this->uri->segment(3);
            $this->Getter->delete_campaign($id_campaign);

            redirect("usercont/dashboardview");
        }


        public function toggle_campaign() {

            $id= $this->uri->segment(3);
            $stat= $this->uri->segment(4);
            $data['dashboard_content'] = $this->Getter->get_campaign($id);

            if($stat==0){
                $newStat = ['stat' => 1];
            }
            else{
                $newStat = ['stat' => 0];
            }
            $this->db->where('id',$id);
            $this->db->update('campaigns',$newStat);
            redirect('userCont/dashboardview');
        }

				
        public function toggle_container() {

            $id_campaign= $this->uri->segment(3);
            $id_container= $this->uri->segment(4);
            $stat= $this->uri->segment(5);
            $data['dashboard_content'] = $this->Getter->get_sequence_container_content($id_container);

            if($stat==0){
                $newStat = ['stat' => 1];
            }
            else{
                $newStat = ['stat' => 0];
            }
            $this->db->where('id',$id_container);
            $this->db->update('sequence_container',$newStat);
            redirect('userCont/mencoba/'.$id_campaign);
        }

        // this is for add newcampaign to database
        public function addEmailCampaign(){

            if (isset($_POST['addEmailCampaign'])){
            $this->form_validation->set_rules('campaign_name', 'campaign name', 'required|is_unique[campaigns.campaign_name]');

                //if form validation true
                if ($this->form_validation->run() == TRUE){

                    $newcampaign = [
                        'campaign_name' =>$_POST['campaign_name']
                    ];

                    $this->db->insert('campaigns', $newcampaign);
                    redirect('userCont/dashboardview');

                }

            }

            redirect('userCont/dashboardview');

        }

        ##################### batas coba-coba ######################
        function Mencoba(){
            $this->load->model('Getter');
            $id = $this->uri->segment(3);
            $data['sequence_container'] = $this->Getter->get_sequence_container_content($id);
            $data['sequence_content'] = $this->Getter->get_sequence_content();
            $data['campaign'] = $this->Getter->edit_campaign($id);
            $data['label_content'] = $this->Getter->get_label();
            $this->load->view('viewmencoba', $data);

        }

}
