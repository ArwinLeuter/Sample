<?php
class download_model extends CI_Model {

    // ------------------ english download -------------------------- //

    public function get_file_data($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('englishbook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }

    // ------------------- math download --------------------------//

    public function get_file_data1($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('mathbook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }

    // ------------------- science download --------------------------//

    public function get_file_data2($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('sciencebook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }

     // ------------------- filipino download --------------------------//

     public function get_file_data3($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('filipinobook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }

     // ------------------- ap download --------------------------//

     public function get_file_data4($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('apbook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }

    // ------------------- ap download --------------------------//

    public function get_file_data5($filename) {
        // query database to get file data based on filename
        $query = $this->db->get_where('pebook', array('files' => $filename));

        // check if file data exists
        if($query->num_rows() > 0) {
            // get file data from database
            $file_data = $query->row_array();

            // read file content from disk
            $file_content = file_get_contents('./uploaded_files/'.$filename);

            // add file content to file data array
            $file_data['file_content'] = $file_content;

            return $file_data;
        }
        else {
            return null;
        }
    }





    public function log_download($user_id, $file_id) {
        $data = array(
            'user_id' => $user_id,
            'file_id' => $file_id,
            'download_time' => date('Y-m-d H:i:s')
        );
        var_dump($data); // add this line to check if the values are being passed correctly
        $this->db->insert('download_logs', $data);
    }



    // --------- download logs ------------------//


}



?>
