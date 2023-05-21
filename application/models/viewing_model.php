
<?php

class viewing_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // --------------------- english --------------------------//


    public function getRecord($id) {
        $query = $this->db->get_where('englishbook', array('book_id' => $id));
        return $query->row_array();
    }

    // --------------------- mathematics --------------------------//


    public function getRecord1($id) {
        $query = $this->db->get_where('mathbook', array('book_id' => $id));
        return $query->row_array();
    }

    // --------------------- science --------------------------//


    public function getRecord2($id) {
        $query = $this->db->get_where('sciencebook', array('book_id' => $id));
        return $query->row_array();
    }

    // --------------------- filipino --------------------------//


    public function getRecord3($id) {
        $query = $this->db->get_where('filipinobook', array('book_id' => $id));
        return $query->row_array();
    }

    // --------------------- AP --------------------------//


    public function getRecord4($id) {
        $query = $this->db->get_where('apbook', array('book_id' => $id));
        return $query->row_array();
    }

    // --------------------- PE --------------------------//


    public function getRecord5($id) {
        $query = $this->db->get_where('pebook', array('book_id' => $id));
        return $query->row_array();
    }

}
?>