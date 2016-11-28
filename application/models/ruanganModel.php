<?php
class ruanganModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function selectRuangan()
        {
                $query = $this->db->get('ruangan');
                return $query->result_array();
        }

        public function tambahRuangan($data)
        {
                $this->db->insert('ruangan',$data);
        }

        public function editRuangan($data)
        {
                $this->db->where('idRuangan', $data['idRuangan']);
                $this->db->update('ruangan', $data);

        }
}