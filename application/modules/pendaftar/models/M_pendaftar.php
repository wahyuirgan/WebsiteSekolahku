<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pendaftar extends CI_Model
{
    function __construct(){
        parent::__construct();
        $session = $this->session->userdata('logged_in');
    }
     
    function getdata(){  
        $this->db->select('*');
        $this->db->from('pendaftaran');
        return $this->db->get();
    }
}
?>