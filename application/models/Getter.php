<?php
class Getter extends CI_Model{

    //this is for get dashboard view
    function get_dash_content()
    {
        $query = $this->db->query("SELECT c.id, c.type, c.campaign_name, l.label_name, c.status
        FROM `campaigns` c
        LEFT JOIN labels l ON c.label_id = l.id"
        );

        return $query->result();

    }



    function get_campaign($id)
    {        
        function getCampaign($id){
            return $this->db->get_where('campaign',['id' => $id]);
        }
   
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
    function get_lomtopup()
    {
        $query = $this->db->query("SELECT * FROM `iseng_kcp` WHERE topup_date <= NOW() + INTERVAL 30 DAY");
                

        return $query->result();
    }
    
}




