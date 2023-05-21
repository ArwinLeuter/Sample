<?php
class delete_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function create($data)
    {
        $this->db->insert('delete_logs', $data);
    }

    public function get_all_delete_logs()
    {
        $this->db->order_by('deleted_by', 'desc');
        $query = $this->db->get('delete_logs');
        return $query->result();
    }
    
}

?>