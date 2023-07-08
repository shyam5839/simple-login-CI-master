<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User extends CI_Controller {

    public function __Construct() {
        // echo'dsffsdfwdfsfdsssssssssssssssss';die;
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        // if($this->session->userdata('role') != 'admin'){
        //     redirect(base_url());
        // }

        $this->load->model('mosque_audit_member');
    }
    public function member_list(){

        $data = array(
            'formTitle' => 'Member Management',
            'title' => 'Member Management',
            'users' => $this->mosque_audit_member->get_user_list(),
        );

        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_user_nav_view');
        $this->load->view('user/member_list', $data);

    }

    private function ajax_checking(){
        if (!$this->input->is_ajax_request()) {
            redirect(base_url());
        }
    }

    public function member_form(){

        // $data = array(
        //     'formTitle' => 'User Management',
        //     'title' => 'User Management',
        //     'users' => $this->admin_model->get_user_list(),
        // );

        // $this->load->view('frame/header_view');
        // $this->load->view('frame/sidebar_user_nav_view');
        $this->load->view('user/member_form');

    }
    public function marriage_form(){

        $this->load->view('user/marriage_form');

    }
    public function saveMarriageForm()
    {
        $memberId = $this->uri->segment(4);
    // print_r($memberId);die;
        // Retrieve the member data from the form
        $marriageData = array(
            'ref_no' => $this->input->post('ref_no'),
            'spouse_name' => $this->input->post('spouse_name'),
            'spouse_occupation' => $this->input->post('spouse_occupation'),
            'spouse_education' => $this->input->post('spouse_education'),
            'spouse_address' => $this->input->post('spouse_address'),
            'spouse_jamaath' => $this->input->post('spouse_jamaath'),
            'spouse_jamaath_address' => $this->input->post('spouse_jamaath_address'),
            'place' => $this->input->post('place'),
            'panchayath' => $this->input->post('panchayath'),
            'taluk' => $this->input->post('taluk'),
            'district' => $this->input->post('district'),
            'date_of_marriage' => $this->input->post('date_of_marriage'),
            'marriage_place' => $this->input->post('marriage_place'),
            'spouse_father' => $this->input->post('spouse_father'),
            'spouse_mother' => $this->input->post('spouse_mother'),
            'member_id' => $this->input->post('member_id'),
            'created_by' => $this->input->post('created_by'),
            'created_at' => $this->input->post('created_at'),
            'status' => $this->input->post('status'));
            // print_r($marriageData);die;

            
                // Update the member data in the database
               $abc = $this->mosque_audit_member->updateMarriageDetails($marriageData,$memberId);
        }
// In your Controller_name.php file

public function update_member()
{
    $id = $this->input->post('id');

    // Retrieve the member data from the form
    $member_data = array(
        'old_reg_no' => $this->input->post('old_reg_no'),
        'member_name' => $this->input->post('member_name'),
        'parent_id' => $this->session->userdata('user_id'),
        'Address' => $this->input->post('Address'),
        'street' => $this->input->post('street'),
        'place' => $this->input->post('place'),
        'pincode' => $this->input->post('pincode'),
        'residence_phone' => $this->input->post('residence_phone'),
        'official_phone' => $this->input->post('official_phone'),
        'Mobile_no' => $this->input->post('Mobile_no'),
        'email' => $this->input->post('email'),
        'jamaath_ward' => $this->input->post('jamaath_ward'),
        'lsg_ward' => $this->input->post('lsg_ward'),
        'panchayath' => $this->input->post('panchayath'),
        'taluk' => $this->input->post('taluk'),
        'village' => $this->input->post('village'),
        'district' => $this->input->post('district'),
        'birth_date' => $this->input->post('birth_date'),
        'birth_place' => $this->input->post('birth_place'),
        'father_member_id' => $this->input->post('father_member_id'),
        'gender' => $this->input->post('gender'),
        'death_date' => $this->input->post('death_date'),
        'buried_date' => $this->input->post('buried_date'),
        'buried_place' => $this->input->post('buried_place'),
        'death_reason' => $this->input->post('death_reason'),
        'place_of_death' => $this->input->post('place_of_death'),
        'existing_subscription_money' => $this->input->post('existing_subscription_money'),
        'revised_subscription_money' => $this->input->post('revised_subscription_money'),
        'imams_allowance' => $this->input->post('imams_allowance'),
        'mosque_allowance' => $this->input->post('mosque_allowance'),
        'deceased_or_handicapped' => $this->input->post('deceased_or_handicapped'),
        'nominee' => $this->input->post('nominee'),
        'relation_with_nominee' => $this->input->post('relation_with_nominee'),
        'ex_jamaath' => $this->input->post('ex_jamaath'),
        'census_taken_by' => $this->input->post('census_taken_by'),
        'census_taken_at' => $this->input->post('census_taken_at'),
        'id_proof' => $this->input->post('id_proof'),
        'membership_type' => $this->input->post('membership_type'),
        'qualification' => $this->input->post('qualification'),
        'blood_group' => $this->input->post('blood_group'),
        'spouse_name' => $this->input->post('spouse_name'),
        'spouse_jamaath' => $this->input->post('spouse_jamaath'),
        'spouse_address' => $this->input->post('spouse_address'),
        'main_member_relation' => $this->input->post('main_member_relation'),
        'occupation' => $this->input->post('occupation'),
        'status' => $this->input->post('status'),
        'created_by' => $this->input->post('created_by'),
        'updated_by' => $this->input->post('updated_by'),
        'monthly_income' => $this->input->post('monthly_income'),
        'eid_income' => $this->input->post('eid_income'),
        'bakrid_income' => $this->input->post('bakrid_income'),
        'created_at' => $this->input->post('created_at'),
        'updated_at' => $this->input->post('updated_at')
    );
    // Update the member data in the database
   $abc = $this->mosque_audit_member->insertMember($member_data);

    // Redirect to a success page or display a success message
    // redirect('controller_name/success');
    print_r($abc);die;
}




}

/* End of file */
