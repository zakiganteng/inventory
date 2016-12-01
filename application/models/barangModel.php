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

        public function tampilFakultas($data)
        {
                $this->db->select('barang.idBarang,barang.namaRuangan,barang.namaBarang,barang.statusBarang')
                        ->from('barang')
                        ->join('ruangan', 'barang.namaRuangan = ruangan.namaRuangan')
                        ->where('ruangan.namaUser',$data);     
                $result = $this->db->get();
                return $result->result_array();
        }
        public function getWhere($data)
        {       
                $this->db->select('*');
                $this->db->where('idBarang',$data);
                $this->db->from('barang');
                $query = $this->db->get();
                return $query->result_array();
        }
        public function getWhereFakultas($data)
        {       
                $this->db->select('*');
                $this->db->where('namaRuangan',$data);
                $this->db->from('barang');
                $query = $this->db->get();                       # code...                      
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
        public function hapusBarang($data)
        {
                $this->db->where('idBarang', $data);
                $this->db->delete('barang');

        }

}