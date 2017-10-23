<?php
class Getter extends CI_Model{

    //this is for get dashboard view
    function get_dash_content()
    {
        $query = $this->db->query("SELECT id, campaign_name, stat, created_at
        FROM `campaigns`"
        );
        return $query->result();
    }


// untuk dapatkan 1 baris data campaign (pasangan edit campaign)
    function get_campaign($id)
    {
        return $this->db->get_where('campaigns',['id' => $id]);
    }


    function get_label()
    {
        $query = $this->db->query("SELECT id, label_name
        FROM `labels`"
        );
        return $query->result();
    }

//testing D
    function get_cobakirim()
    {
        $query = $this->db->query("SELECT email FROM `users`");
        
        return $query->result_array();
    }
  


    function edit_campaign($id) {
        $id = $this->uri->segment(3);        

        $query = $this->db->query("SELECT id, campaign_name
        FROM `campaigns` 
        WHERE id = $id"
        );
        return $query->result_array() ;
    }

    function delete_campaign($id) {
        
        $query = $this->db->query("SELECT c.id as C_ID, s.id as S_ID, sa.id AS SA_ID, sap.id AS SAP_ID
                                    FROM `campaigns` c
                                    LEFT JOIN sequences s 
                                        ON c.id = s.campaign_id
                                    LEFT JOIN sequence_action sa     
                                        ON s.id = sa.sequence_ID
                                    LEFT JOIN seq_action_param sap  
                                        ON sa.id = sap.sequence_act_ID"
                                    );
        return $query->result_array() ;
    }

    function get_sequence($id) {
        
        $query = $this->db->query("SELECT c.id, c.sequence_qty, c.campaign_name, l.label_name
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id
        WHERE c.id = $id"
        );
        return $query->result_array() ;
    }

}