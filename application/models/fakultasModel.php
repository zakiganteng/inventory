<?php
class fakultasModel extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('fakultas');
                return $query->result();
        }

        public function insert_entry($data)
        {
                $query = $this->db->insert('fakultas', $data);
                return $query->result();
        }

        public function update_entry($data)
        {
                $this->db->where('idFakultas', $data['idFakultas']);
                $this->db->update('fakultas', $data);
        }

}