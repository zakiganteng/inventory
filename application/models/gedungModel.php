<?php
class gedungModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function selectGedung()
        {
                $query = $this->db->get('gedung');
                return $query->result_array();
        }
        public function getWhere($data)
        {       
                $this->db->select('*');
                $this->db->where('idgedung',$data);
                $this->db->from('gedung');
                $query = $this->db->get();
                return $query->result_array();
        }

        public function tambahGedung($data)
        {
                $this->db->insert('gedung',$data);
        }

        public function editGedung($data)
        {
                $this->db->where('idGedung', $data['idGedung']);
                $this->db->update('gedung', $data);

        }
        public function hapusGedung($data)
        {
                $this->db->where('idGedung', $data);
                $this->db->delete('gedung');

        }
}