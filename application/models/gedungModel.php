<?php
class gedungModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('gedung');
                return $query->result();
        }

        public function insert_entry($data)
        {
                $query = $this->db->insert('gedung', $data);
                return $query->result();
        }

        public function update_entry($data)
        {
                $this->db->where('idGedung', $data['idGedung']);
                $this->db->update('gedung', $data);
        }

}