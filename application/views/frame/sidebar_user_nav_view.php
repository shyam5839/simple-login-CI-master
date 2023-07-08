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
                    <li> <a href="<?=base_url('user/member_list')?>">&raquo; Member List</a> </li>
                </ul>
            </li>
            <?php endif; ?>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Other Menu Sample<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li> <a href="<?=base_url('user/member_list')?>">&raquo; Member List</a> </li>

                    <!-- <li> <a href="<?=base_url('user/member_form')?>">&raquo; Adding Member</a> </li> -->
                    <!-- <li> <a href="<?=base_url('user/marriage_form')?>">&raquo; Adding Marriage Certificate</a> </li> -->

                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>





    <!-- <div class="modal fade" id="addMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
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
                            <button id="newMarriageSubmit" type="button" class="btn btn-primary">CREATE</button>
                            <input type="submit" class="btn btn-primary" value="Submit">

                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div> -->

        <!-- /.navbar-static-side -->
        </nav>