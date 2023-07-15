<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><?=$title?></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <?php if($this->session->flashdata('success')):?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('success'); ?></strong>
    </div>
    <?php elseif($this->session->flashdata('error')):?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong><?php echo $this->session->flashdata('error'); ?></strong>
    </div>
    <?php endif;?>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover" id="dataTables-user-list">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>MobileNumber</th>
                        <th>Occupation</th>
                        <th>BloodGroup</th>
                        <th>UserImage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users  as $row): ?>
                    <tr>
                        <td><?php echo $row->member_name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->Address; ?></td>
                        <td><?php echo $row->Mobile_no; ?></td>
                        <td><?php echo $row->occupation; ?></td>
                        <td><?php echo $row->blood_group; ?></td>
                        <td><img src="<?php echo base_url('uploads/'.$row->user_image); ?>" alt="Image" width="100">
                        </td>
                        <td>

                            <a class="btn btn-warning" id="user-riset"
                                onclick="reset_confirmation('<?=$row->email?>','<?=$row->id?>')" data-toggle="modal"
                                data-target="#resetConfirm"><i class="fas fa-undo"></i> RESET </a>
                            <a class="btn btn-danger" id="user-delete"
                                onclick="deactivate_confirmation('<?=$row->email?>','<?=$row->id?>');"
                                data-toggle="modal" data-target="#deactivateConfirm"><i class="fas fa-trash"></i> DELETE
                            </a>
                            <a class="btn btn-info" id="member-marriage" onclick="edit_marriage_popup('<?=$row->id?>');"
                                data-toggle="modal" data-target="#addMarriage"><i class="fa fa-ring"></i> MARRIAGE </a>

                        </td>

                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <div class="col-lg-12"
                style="position:fixed;bottom: 5%;left: 88%; width: 150px;text-align: center;border-radius: 100%;">
                <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal"
                    data-target="#addMember" />
            </div>




        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<div class="modal fade" id="addMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">CREATE NEW MARRIAGE</h4>
            </div>
            <div class="modal-body">
                <h1>Add Marriage Detail</h1>


                <form method="POST" id="addMarriageForm" action="<?php echo site_url('user/saveMarriageForm'); ?>">

                    <label for="ref_no">Reference No:</label>
                    <input type="text" name="ref_no" id="ref_no" required>
                    <br><br>

                    <label for="spouse_name">Spouse Name:</label>
                    <input type="text" name="spouse_name" id="spouse_name" required>
                    <br><br>

                    <label for="spouse_occupation">Spouse Occupation:</label>
                    <input type="text" name="spouse_occupation" id="spouse_occupation" required>
                    <br><br>

                    <label for="spouse_education">Spouse Education:</label>
                    <input type="text" name="spouse_education" id="spouse_education" required>
                    <br><br>

                    <label for="spouse_address">Spouse Address:</label>
                    <input type="text" name="spouse_address" id="spouse_address" required>
                    <br><br>

                    <label for="spouse_jamaath">Spouse Jamaath:</label>
                    <input type="text" name="spouse_jamaath" id="spouse_jamaath" required>
                    <br><br>

                    <label for="spouse_jamaath_address">Spouse Jamaath Address:</label>
                    <input type="text" name="spouse_jamaath_address" id="spouse_jamaath_address" required>
                    <br><br>

                    <label for="place">Place:</label>
                    <input type="text" name="place" id="place" required>
                    <br><br>

                    <label for="panchayath">Panchayath:</label>
                    <input type="text" name="panchayath" id="panchayath" required>
                    <br><br>

                    <label for="taluk">Taluk:</label>
                    <input type="text" name="taluk" id="taluk" required>
                    <br><br>

                    <label for="district">District:</label>
                    <input type="text" name="district" id="district" required>
                    <br><br>

                    <label for="date_of_marriage">Date of Marriage:</label>
                    <input type="date" name="date_of_marriage" id="date_of_marriage" required>
                    <br><br>

                    <label for="marriage_place">Marriage Place:</label>
                    <input type="text" name="marriage_place" id="marriage_place" required>
                    <br><br>

                    <label for="spouse_father">Spouse Father:</label>
                    <input type="text" name="spouse_father" id="spouse_father" required>
                    <br><br>

                    <label for="spouse_mother">Spouse Mother:</label>
                    <input type="text" name="spouse_mother" id="spouse_mother" required>
                    <br><br>

                    <label for="spouse_image">Spouse Image:</label>
                    <input type="text" name="spouse_image" id="spouse_image" required>
                    <br><br>

                    <label for="created_by">Created By:</label>
                    <input type="text" name="created_by" id="created_by" required>
                    <br><br>

                    <label for="created_at">Created At:</label>
                    <input type="date" name="created_at" id="created_at" required>
                    <br><br>

                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" required>
                    <br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                        <button id="newMarriageSubmit" type="button" class="btn btn-primary">CREATE</button>
                        <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->

                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deactivateConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-red">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">DELETE CONFIRMATION</h4>
            </div>
            <div class="modal-body">
                <label>You are going to delete user <label id="user-email" style="color:blue;"></label>.</label><br />
                <label>Click <b>Yes</b> to continue.</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="deactivateYesButton" class="btn btn-danger">Yes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="resetConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-red">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">RESET CONFIRMATION</h4>
            </div>
            <div class="modal-body">
                <label>You are going to reset user <label id="reset-user-email" style="color:blue;"></label>'s
                    password.</label><br />
                <label>Tempolary password will be sent to this email.</label><br />
                <label>Click <b>Yes</b> to continue.</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="resetYesButton" class="btn btn-warning">Yes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




<div class="modal fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-blue">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">CREATE NEW MEMBER</h4>
            </div>
            <div class="modal-body">
                <h1>Add Member</h1>
                <form action="<?php echo site_url('user/update_member'); ?>" method="post"
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> <label>Old Registration Number:</label> <input type="text"
                                    name="old_reg_no" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Member Name:</label> <input type="text" name="member_name"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Address:</label> <input type="text" name="Address" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Street:</label> <input type="text" name="street" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Place:</label> <input type="text" name="place" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Pincode:</label> <input type="text" name="pincode" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Residence Phone:</label> <input type="text"
                                    name="residence_phone" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Official Phone:</label> <input type="text"
                                    name="official_phone" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Mobile Number:</label> <input type="text" name="Mobile_no"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Email:</label> <input type="text" name="email" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Jamaath Ward:</label> <input type="text" name="jamaath_ward"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>LSG Ward:</label> <input type="text" name="lsg_ward"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Panchayath:</label> <input type="text" name="panchayath"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Taluk:</label> <input type="text" name="taluk" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Village:</label> <input type="text" name="village" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>District:</label> <input type="text" name="district"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Birth Date:</label> <input type="text" name="birth_date"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Birth Place:</label> <input type="text" name="birth_place"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Father Member ID:</label> <input type="text"
                                    name="father_member_id" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Gender:</label> <input type="text" name="gender" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Death Date:</label> <input type="text" name="death_date"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Buried Date:</label> <input type="text" name="buried_date"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Buried Place:</label> <input type="text" name="buried_place"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Death Reason:</label> <input type="text" name="death_reason"
                                    value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Place of Death:</label> <input type="text"
                                    name="place_of_death" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Existing Subscription Money:</label> <input type="text"
                                    name="existing_subscription_money" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Revised Subscription Money:</label> <input type="text"
                                    name="revised_subscription_money" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Imam's Allowance:</label> <input type="text"
                                    name="imams_allowance" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Mosque Allowance:</label> <input type="text"
                                    name="mosque_allowance" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Deceased or Handicapped:</label> <input type="text"
                                    name="deceased_or_handicapped" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Nominee:</label> <input type="text" name="nominee" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Relation with Nominee:</label> <input type="text"
                                    name="relation_with_nominee" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Ex Jamaath:</label> <input type="text" name="ex_jamaath"
                                    value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Census Taken By:</label> <input type="text"
                                    name="census_taken_by" value="
        "> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Census Taken At:</label> <input type="text"
                                    name="census_taken_at" value="
        "> </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user_image">User Image:</label>
                          
                                <input type="file" name="user_image" style="display: inline-block;">
                                <!-- <img src="<?php echo base_url('.uploads/' . $member['user_image']); ?>" alt="User Image" width="100"> -->
                            </div>
                        </div>
                        

                        <div class="col-md-12">
                            <div class="form-group"> <label>ID Proof:</label> <input type="text" name="id_proof"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Membership Type:</label> <input type="text"
                                    name="membership_type" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Qualification:</label> <input type="text"
                                    name="qualification" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Blood Group:</label> <input type="text" name="blood_group"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Main Member Relation:</label> <input type="text"
                                    name="main_member_relation" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Occupation:</label> <input type="text" name="occupation"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Status:</label> <input type="text" name="status" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Created By:</label> <input type="text" name="created_by"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Updated By:</label> <input type="text" name="updated_by"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Monthly Income:</label> <input type="text"
                                    name="monthly_income" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Eid Income:</label> <input type="text" name="eid_income"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Bakrid Income:</label> <input type="text"
                                    name="bakrid_income" value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Created At:</label> <input type="text" name="created_at"
                                    value=""> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"> <label>Updated At:</label> <input type="text" name="updated_at"
                                    value=""> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                        <input id="newMemberSubmit" type="submit" class="btn btn-primary" value="CREATE">

                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-blue">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">UPDATE USER DETAILS</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit-user-id" value="" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label> &nbsp;&nbsp;
                                <label class="error" id="edit-error_name"> field is required.</label>
                                <label class="error" id="edit-error_name2"> name must be alphanumeric.</label>
                                <input class="form-control" id="edit-name" placeholder="Name" name="edit-name"
                                    type="text" autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label> &nbsp;&nbsp;
                                <label class="error" id="edit-error_email"> field is required.</label>
                                <label class="error" id="edit-error_email2"> email has already exist.</label>
                                <label class="error" id="edit-error_email3"> invalid email adress.</label>
                                <input class="form-control" id="edit-email" placeholder="E-mail" name="edit-email"
                                    type="email" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Role</label>&nbsp;&nbsp;
                                <label class="error" id="edit-error_role"> field is required.</label>
                                <select name="role" id="edit-role" class="form-control">
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                    <button id="editUserSubmit" type="button" class="btn btn-primary">UPDATE</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /#page-wrapper -->
    <?php $this->load->view('frame/footer_view')?>
    <script src="<?=base_url()?>assets/js/view/user_list.js"></script>