<?php
class userModel extends CI_Model {
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function selectUser()
        {
                $query = $this->db->get('user');
                return $query->result_array();
        }
        public function cek_user($data)
        {
        	# code...
        	$query = $this->db->get_where('user', $data);
        	return $query;
        }
}