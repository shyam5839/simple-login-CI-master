<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
    }

    public function index() {
        $userData = $this->session->get_userdata();
$role = $userData['role'];
if($role == 'admin'){$this->load->view('frame/header_view');
    $this->load->view('frame/sidebar_nav_view');
    $this->load->view('dashboard');
    $this->load->view('frame/footer_view');
}else{
        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_user_nav_view');
        $this->load->view('userDashboard');
        $this->load->view('frame/footer_view');
    }
    }


}

/* End of file */
