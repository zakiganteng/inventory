<?php
class permintaanModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function selectPermintaan()
        {
                $query = $this->db->get('permintaan');
                return $query->result_array();
        }

        public function tambahPermintaan($data)
        {
                $this->db->insert('permintaan',$data);
        }

        public function editPermintaan($data)
        {
                $this->db->where('idPermintaan', $data['idPermintaan']);
                $this->db->update('permintaan', $data);

        }

}