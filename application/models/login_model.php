
<?php

class login_model extends CI_Model{

    public function fetch_user_details($username, $password)
    {
        return $this->db->where('username', $username)->where('password', $password)->get('users');
    }


}

?>