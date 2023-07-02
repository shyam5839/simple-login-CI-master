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

  
    }



/* End of file */
