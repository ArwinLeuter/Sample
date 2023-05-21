<?php
class Activity_log_model extends CI_Model {
    
    public function create($data) {
        $data['username'] = (string) $data['username'];
        $this->db->insert('activity_logs', $data);
    }

    public function get_all_activity_logs() {
        $query = $this->db->get('activity_logs');
        return $query->result();
    }
    
}

?>