<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campaignCont extends CI_Controller {

public function campaignregist(){

		
		if (isset($_POST['campaignregist'])){
			$this->form_validation->set_rules('campaign_name', 'campaign_name', 'required|is_unique[campaigns.campaign_name]');
			$this->form_validation->set_rules('sequence_qty', 'sequence_qty', 'required|[campaigns.sequence_qty]');
			$this->form_validation->set_rules('label_id', 'label_id', 'required|[campaigns.label_id]');
			
		
						

			
			if ($this->form_validation->run() == TRUE){
				echo 'form validated';

				
			
			$data = [
				'campaign_name'=>$_POST['campaign_name'],
				'sequence_qty'=>$_POST['sequence_qty'],
                'label_id'=>$_POST['label_id'],
                'create_at'=>date('Y-m-d'),
			];

			$this->db->insert('campaigns', $data);

			$this->session->set_flashdata('success', 'Your Campaign has been registered.');
			redirect("authCont/sequencefrom", "refresh");
			
			}
		}

		$this->load->view('newemailcampaignView');
    }
    
}