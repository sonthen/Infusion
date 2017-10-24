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

    function get_sequence_container_content($id) {
        
        $query = $this->db->query("SELECT id, sequence_container_name, container_parent_id, lvl, campaign_id, label_id, stat
        FROM `sequence_container` 
        WHERE campaign_id = $id"
        );
        return $query->result_array() ;
    }

    function get_sequence_content() {
        
        $query = $this->db->query("SELECT id, sequence_name, sequence_type, parent_id, container_id, delay, value_1, value_2, container_id
        FROM `sequences`"
        );
        return $query->result_array() ;
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
    }

    function delete_sequence($id) {
        
        $query = $this->db->query("DELETE FROM `sequences` 
                                    WHERE `sequences`.`id` = $id"
                                    );
        
    }

    

}