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
    function parent_container_lvl ($id) {
        if($id == NULL) {
            $id=0;
        }
        $query = $this->db->query("SELECT lvl 
        FROM `sequence_container` 
        WHERE id=$id"
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

        $query = $this->db->query("SELECT id, campaign_name
        FROM `campaigns` 
        WHERE id = $id"
        );
        return $query->result_array() ;
    }

    function delete_campaign($id) {
        
        $query = $this->db->query("DELETE FROM `campaigns` 
                                    WHERE `campaigns`.`id` = $id"
                                    );
    }

    function delete_sequence($id) {
        
        $query = $this->db->query("DELETE FROM `sequences` 
                                    WHERE `sequences`.`id` = $id"
                                    );
        
    }

    function delete_sequence_container($id) {
        
        $query = $this->db->query("DELETE FROM `sequence_container` 
                                    WHERE `sequence_container`.`id` = $id"
                                    );
        
    }

    

}