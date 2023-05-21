<?php
class request_model extends CI_Model {
    
    public function create($data) {
        $data['username'] = (string) $data['username'];
        $this->db->insert('request', $data);
    }

    public function savemodule($data){
        $this->db->set($data);
        return $this->db->insert('wishlist');
    }

    public function getFromId(){ 
        return $this->db->get('wishlist')->result_array();
    }
}

?>