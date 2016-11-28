<?php
class barangModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function selectBarang()
        {
                $query = $this->db->get('barang');
                return $query->result_array();
        }

        public function tambahBarang($data)
        {
                $this->db->insert('barang',$data);
        }

        public function editBarang($data)
        {
                $this->db->where('idBarang', $data['idBarang']);
                $this->db->update('barang', $data);

        }

}