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
        public function getWhere($data)
        {       
                $this->db->select('*');
                $this->db->where('idruangan',$data);
                $this->db->from('ruangan');
                $query = $this->db->get();
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
        public function hapusRuangan($data)
        {
                $this->db->where('idRuangan', $data);
                $this->db->delete('ruangan');

        }
}