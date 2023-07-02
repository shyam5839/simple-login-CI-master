<script src="<?=base_url()?>assets/js/view/user_list.js"></script>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <?php echo '<p class="welcome"><b> <text style="font-size:150%;">&#9786</text> <i>Welcome </i>' . $this->session->userdata('name') . "!</b></p>"; ?>
            </li>
            <li>
                <a href="<?=base_url()?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>
            <?php if($this->session->userdata('role') == 'admin'): ?>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?=base_url('admin/user_list')?>">&raquo; User List</a> </li>
                    <li> <a href="<?=base_url('admin/activity_log')?>">&raquo; Activity Log</a> </li>
                </ul>
            </li>
            <?php endif; ?>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Other Menu Sample<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal"
                            data-target="#addMember" />&raquo; Adding Member
                    </li>
                    <!-- <li> <a href="<?=base_url('user/member_form')?>">&raquo; Adding Member</a> </li> -->
                    <!-- <li> <a href="<?=base_url('user/marriage_form')?>">&raquo; Adding Marriage Certificate</a> </li> -->
                    <li>
                        <img class="add_user" src="<?=base_url()?>assets/images/add.png" data-toggle="modal"
                            data-target="#addMarriage" />&raquo; Adding Marriage
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

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
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Old Registration Number:</label> <input type="text"
                                    name="old_reg_no" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Member Name:</label> <input type="text" name="member_name"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Address:</label> <input type="text" name="Address" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Street:</label> <input type="text" name="street" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Place:</label> <input type="text" name="place" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Pincode:</label> <input type="text" name="pincode" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Residence Phone:</label> <input type="text"
                                    name="residence_phone" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Official Phone:</label> <input type="text"
                                    name="official_phone" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Mobile Number:</label> <input type="text" name="Mobile_no"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Email:</label> <input type="text" name="email" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Jamaath Ward:</label> <input type="text" name="jamaath_ward"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>LSG Ward:</label> <input type="text" name="lsg_ward"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Panchayath:</label> <input type="text" name="panchayath"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Taluk:</label> <input type="text" name="taluk" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Village:</label> <input type="text" name="village" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>District:</label> <input type="text" name="district"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Birth Date:</label> <input type="text" name="birth_date"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Birth Place:</label> <input type="text" name="birth_place"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Father Member ID:</label> <input type="text"
                                    name="father_member_id" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Gender:</label> <input type="text" name="gender" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Death Date:</label> <input type="text" name="death_date"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Buried Date:</label> <input type="text" name="buried_date"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Buried Place:</label> <input type="text" name="buried_place"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Death Reason:</label> <input type="text" name="death_reason"
                                    value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Place of Death:</label> <input type="text"
                                    name="place_of_death" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Existing Subscription Money:</label> <input type="text"
                                    name="existing_subscription_money" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Revised Subscription Money:</label> <input type="text"
                                    name="revised_subscription_money" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Imam's Allowance:</label> <input type="text"
                                    name="imams_allowance" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Mosque Allowance:</label> <input type="text"
                                    name="mosque_allowance" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Deceased or Handicapped:</label> <input type="text"
                                    name="deceased_or_handicapped" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Nominee:</label> <input type="text" name="nominee" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Relation with Nominee:</label> <input type="text"
                                    name="relation_with_nominee" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Ex Jamaath:</label> <input type="text" name="ex_jamaath"
                                    value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Census Taken By:</label> <input type="text"
                                    name="census_taken_by" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Census Taken At:</label> <input type="text"
                                    name="census_taken_at" value="
        "> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>User Image:</label> <input type="file" name="user_image">
                                <!-- <img src="<?php echo base_url('path/to/user_images/' . $member['user_image']); ?>" alt="User Image" width="100"> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>ID Proof:</label> <input type="text" name="id_proof"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Membership Type:</label> <input type="text"
                                    name="membership_type" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Qualification:</label> <input type="text"
                                    name="qualification" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Blood Group:</label> <input type="text" name="blood_group"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Spouse Name:</label> <input type="text" name="spouse_name"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Spouse Jamaath:</label> <input type="text"
                                    name="spouse_jamaath" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Spouse Address:</label> <input type="text"
                                    name="spouse_address" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Main Member Relation:</label> <input type="text"
                                    name="main_member_relation" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Occupation:</label> <input type="text" name="occupation"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Status:</label> <input type="text" name="status" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Created By:</label> <input type="text" name="created_by"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Updated By:</label> <input type="text" name="updated_by"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Monthly Income:</label> <input type="text"
                                    name="monthly_income" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Eid Income:</label> <input type="text" name="eid_income"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Bakrid Income:</label> <input type="text"
                                    name="bakrid_income" value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Created At:</label> <input type="text" name="created_at"
                                    value=""> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"> <label>Updated At:</label> <input type="text" name="updated_at"
                                    value=""> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                        <button id="newMemberSubmit" type="button" class="btn btn-primary">CREATE</button>
                        <input id="newMemberSubmit" type="submit" class="btn btn-primary" value="Update">

                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <div class="modal fade" id="addMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-blue">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">CREATE NEW MARRIAGE</h4>
                </div>
                <div class="modal-body">
                    <h1>Add Marriage Detail</h1>

                    <form method="POST" action="<?php echo site_url('user/saveMarriageForm'); ?>">
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

                        <label for="member_id">Member ID:</label>
                        <input type="text" name="member_id" id="member_id" required>
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
                            <button id="newMemberSubmit" type="button" class="btn btn-primary">CREATE</button>
                            <input type="submit" class="btn btn-primary" value="Submit">

                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.navbar-static-side -->
        </nav>