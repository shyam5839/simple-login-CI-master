<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Mosque_audit_member extends CI_Model {

    function __construct() {
        parent::__construct();
    }



        public function insertMember($data) {
            $this->db->insert('mosque_audit_member', $data);
            return $this->db->insert_id();
        }
        public function insertMarriageDetails($data) {
            // print_r($data);die;
            $this->db->insert('mosque_audit_marriage_certificate', $data);
            return $this->db->insert_id();
        }
        function get_user_list(){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('status', 1);
            $query=$this->db->get();
            return $query->result();
        }

        public function updateMarriageDetails($data, $memberId) {
            $existingRow = $this->db->get_where('mosque_audit_marriage_certificate', array('member_id' => $memberId))->row();
        
            if ($existingRow) {
                $this->db->where('member_id', $memberId);
                $this->db->update('mosque_audit_marriage_certificate', $data);
                return $this->db->affected_rows();
            } else {
                $data['member_id'] = $memberId;
                $this->db->insert('mosque_audit_marriage_certificate', $data);
                return $this->db->insert_id();
            }
        }
        
    }



/* End of file */
