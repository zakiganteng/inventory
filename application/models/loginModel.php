<?php
class barangModel extends CI_Model {


        public function __construct()
        {
                $this->load->database();
        }
 
        public function login() {
 
                $namaUser = $this->input->POST('namaUser', TRUE);
                $password = md5($this->input->POST('password', TRUE));
                $data = $this->db->query("SELECT * from user where namaUser='$namaUser' and password=md5('$password') LIMIT 1 ");
                return $data->row();
        }

}