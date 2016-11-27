<?php
class ruanganModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('ruangan');
                return $query->result();
        }

        public function insert_entry($data)
        {
                $query = $this->db->insert('ruangan', $data);
                return $query->result();
        }

        public function update_entry($data)
        {
                $this->db->where('idRuangan', $data['idRuangan']);
                $this->db->update('ruangan', $data);
        }

}