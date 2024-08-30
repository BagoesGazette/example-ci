<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example_model extends CI_Model {

    public function getAllMesin() {
        $this->db->select('mesin');
        $this->db->group_by('mesin');
        $query = $this->db->get('transaction'); 
        return $query->result();
    }

    public function getAllOperator() {
        $this->db->select('submitted_by');
        $this->db->group_by('submitted_by');
        $query = $this->db->get('transaction'); 
        return $query->result();
    }

    public function getAllSite() {
        $this->db->select('site_code');
        $this->db->group_by('site_code');
        $query = $this->db->get('transaction'); 
        return $query->result();
    }

    public function getAllActivity() {
        $this->db->select('activity');
        $this->db->group_by('activity');
        $query = $this->db->get('transaction'); 
        return $query->result();
    }

    public function getAllMonth() {
        $data = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
        return $data;
    }

    public function getAllData(){
        $query = $this->db->get('transaction');
        return $query;
    }
    
}
