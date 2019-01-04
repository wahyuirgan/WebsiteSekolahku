<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    function __construct(){
        parent::__construct();
        $session = $this->session->userdata('logged_in');
    }
     
    function insert($datainsert=array()){
        $this->db->insert('pendaftaran', $datainsert);
        return $this->db->insert_id();
    }
}
?>