
<?php

class auth_model extends CI_Model{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //--------------------------------------//

    public function register_user(){

        $password=$this->input->post('password');
        $con_password=$this->input->post('con_password');
        
       
        if($password!=$con_password){
            $this->session->set_flashdata('wrong','Invalid Password Confirmation!');
            redirect('Auth/register');
        }else{
            $data=array(
                "name"=>$this->input->post('name'),
                "username"=>$this->input->post('username'),
                "password"=>$password,
                "admin_level"=>$this->input->post('admin_level')
            );

            $this->db->insert('users',$data);
            $this->session->set_flashdata('success','You are registered please login');
            redirect('Auth/');

        }
    }






    // ------------------ CHAT----------//
    public function insertChat($data)
    {
        $this->db->set($data);
        return $this->db->insert('groupChat');
    }
    public function retrieve_message()
    {
        return $this->db->get('groupChat')->result_array();

    }


    //--------------------- upload --------------------//
    
    public function insertUpload($data){
        return $this->db->insert('uploadedfiles', $data);
    }

    public function getUploadfiles(){

      return  $this->db->query("SELECT * FROM uploadedfiles WHERE uploaded_file")->result_array();
       
    }





    //---------------- CRUD --------------------------

    //---------------- english --------------------------


    public function saveenglish($eng){
        $this->db->set($eng);
        return $this->db->insert('englishbook');
    }

    public function getFromId(){ 
        return $this->db->get('englishbook')->result_array();
    }

    //---------------- math --------------------------

    public function savemath($math){
        $this->db->set($math);
        return $this->db->insert('mathbook');
    }

    public function getFromMath(){ 
        return $this->db->get('mathbook')->result_array();
    }

    //---------------- science --------------------------

    public function savescience($sci){
        $this->db->set($sci);
        return $this->db->insert('sciencebook');
    }

    public function getFromScience(){ 
        return $this->db->get('sciencebook')->result_array();
    }

    //---------------- filipino --------------------------

    public function savesfilipino($fil){
        $this->db->set($fil);
        return $this->db->insert('filipinobook');
    }

    public function getFromFilipino(){ 
        return $this->db->get('filipinobook')->result_array();
    }


    //---------------- ap --------------------------

    public function saveap($ap){
        $this->db->set($ap);
        return $this->db->insert('apbook');
    }

    public function getFromAP(){ 
        return $this->db->get('apbook')->result_array();
    }

    //---------------- pe --------------------------


    public function savepe($pe){
        $this->db->set($pe);
        return $this->db->insert('pebook');
    }

    public function getFromPE(){ 
        return $this->db->get('pebook')->result_array();
    }




    
    //------------ english ---------------//
    //-------------- delete --------- //
    public function delete_record($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('englishbook'); // Delete the record from 'my_table'
    }

    //-------------- update -----------//


    public function getFormByid($id){
        return $this->db->where('book_id', $id)->get('englishbook')->row_array();
    }   

    public function update_english($data, $id){
        return $this->db->where('book_id', $id)->update('englishbook', $data);
    }
// --------------------------------

    //------------ math ---------------//
    //-------------- delete --------- //

    public function delete_record1($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('mathbook'); // Delete the record from 'my_table'
    }


    //-------------- update -----------//

    public function getFormByid1($id){
        return $this->db->where('book_id', $id)->get('mathbook')->row_array();
    }

    public function update_math($data, $id){
        return $this->db->where('book_id', $id)->update('mathbook', $data);
    }

    
    //------------ science ---------------//
    //-------------- delete --------- //

    public function delete_record2($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('sciencebook'); // Delete the record from 'my_table'
    }

    //-------------- update -----------//

    public function getFormByid2($id){
        return $this->db->where('book_id', $id)->get('sciencebook')->row_array();
    }

    public function science_update($data, $id){
        return $this->db->where('book_id', $id)->update('sciencebook', $data);
    }


        //------------ filipino ---------------//
    //-------------- delete --------- //

    public function delete_record3($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('filipinobook'); // Delete the record from 'my_table'
    }

    //-------------- update -----------//

    public function getFormByid3($id){
        return $this->db->where('book_id', $id)->get('filipinobook')->row_array();
    }

    public function update_filipino($data, $id){
        return $this->db->where('book_id', $id)->update('filipinobook', $data);
    }

        //------------ AP ---------------//
    //-------------- delete --------- //

    public function delete_record4($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('apbook'); // Delete the record from 'my_table'
    }

    //-------------- update -----------//

    public function getFormByid4($id){
        return $this->db->where('book_id', $id)->get('apbook')->row_array();
    }

    public function update_ap($data, $id){
        return $this->db->where('book_id', $id)->update('apbook', $data);
    }

       //------------ AP ---------------//
    //-------------- delete --------- //

    public function delete_record5($id) {
        $this->db->where('book_id', $id); // Set the WHERE condition
        $this->db->delete('pebook'); // Delete the record from 'my_table'
    }

    //-------------- update -----------//

    public function getFormByid5($id){
        return $this->db->where('book_id', $id)->get('pebook')->row_array();
    }

    public function update_pe($data, $id){
        return $this->db->where('book_id', $id)->update('pebook', $data);
    }

    //-------------------------------------------------------------------------------------------------------//

    public function get_count() {
        return $this->db->count_all('englishbook');
    }

    public function get_count2() {
        return $this->db->count_all('mathbook');
    }

    public function get_count3() {
        return $this->db->count_all('sciencebook');
    }

    public function get_count4() {
        return $this->db->count_all('filipinobook');
    }
    public function get_count5() {
        return $this->db->count_all('pebook');
    }
    public function get_count6() {
        return $this->db->count_all('apbook');
    }

    // ----------------------------------------------------------------//

    // public function getRecord($id) {
    //     $query = $this->db->get_where('englishbook', array('book_id' => $id));
    //     return $query->row_array();
    // }

    // -------------------------search functions ---------------------------------------//

    public function get_search($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('englishbook')->result_array();

    }

    public function get_search1($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('mathbook')->result_array();

    }

    public function get_search2($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('sciencebook')->result_array();

    }

    public function get_search3($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('filipinobook')->result_array();

    }

    public function get_search4($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('apbook')->result_array();

    }

    public function get_search5($keyword){

        $this->db->like('title', $keyword);
        $this->db->or_like('authors', $keyword);
        $this->db->or_like('date', $keyword);
        $this->db->or_like('files', $keyword);
        return $this->db->get('pebook')->result_array();

    }

    public function get_delete_logs() {
        // Query the delete_logs table to retrieve all log records
        $query = $this->db->get('delete_logs');
        return $query->result();
    }
}

?>