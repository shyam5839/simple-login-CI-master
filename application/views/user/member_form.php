<!DOCTYPE html>
<html>

<head>
    <title>Member</title>
</head>

<body>
    <h1>Add Member</h1>
    <form action="<?php echo site_url('user/update_member'); ?>" method="post" enctype="multipart/form-data"> <input type="hidden" name="id" value="">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group"> <label>Registration Number:</label> <input type="text" name="reg_no" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Old Registration Number:</label> <input type="text" name="old_reg_no" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Member Name:</label> <input type="text" name="member_name" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Parent ID:</label> <input type="text" name="parent_id" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Address:</label> <input type="text" name="Address" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Street:</label> <input type="text" name="street" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Place:</label> <input type="text" name="place" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Pincode:</label> <input type="text" name="pincode" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Residence Phone:</label> <input type="text" name="residence_phone" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Official Phone:</label> <input type="text" name="official_phone" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Mobile Number:</label> <input type="text" name="Mobile_no" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Email:</label> <input type="text" name="email" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Jamaath Ward:</label> <input type="text" name="jamaath_ward" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>LSG Ward:</label> <input type="text" name="lsg_ward" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Panchayath:</label> <input type="text" name="panchayath" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Taluk:</label> <input type="text" name="taluk" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Village:</label> <input type="text" name="village" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>District:</label> <input type="text" name="district" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Birth Date:</label> <input type="text" name="birth_date" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Birth Place:</label> <input type="text" name="birth_place" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Father Member ID:</label> <input type="text" name="father_member_id" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Gender:</label> <input type="text" name="gender" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Death Date:</label> <input type="text" name="death_date" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Buried Date:</label> <input type="text" name="buried_date" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Buried Place:</label> <input type="text" name="buried_place" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Death Reason:</label> <input type="text" name="death_reason" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Place of Death:</label> <input type="text" name="place_of_death" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Existing Subscription Money:</label> <input type="text" name="existing_subscription_money" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Revised Subscription Money:</label> <input type="text" name="revised_subscription_money" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Imam's Allowance:</label> <input type="text" name="imams_allowance" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Mosque Allowance:</label> <input type="text" name="mosque_allowance" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Deceased or Handicapped:</label> <input type="text" name="deceased_or_handicapped" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Nominee:</label> <input type="text" name="nominee" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Relation with Nominee:</label> <input type="text" name="relation_with_nominee" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Ex Jamaath:</label> <input type="text" name="ex_jamaath" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Census Taken By:</label> <input type="text" name="census_taken_by" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Census Taken At:</label> <input type="text" name="census_taken_at" value="
        "> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>User Image:</label> <input type="file" name="user_image"> <!-- <img src="<?php echo base_url('path/to/user_images/' . $member['user_image']); ?>" alt="User Image" width="100"> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>ID Proof:</label> <input type="text" name="id_proof" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Membership Type:</label> <input type="text" name="membership_type" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Qualification:</label> <input type="text" name="qualification" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Blood Group:</label> <input type="text" name="blood_group" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Spouse Name:</label> <input type="text" name="spouse_name" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Spouse Jamaath:</label> <input type="text" name="spouse_jamaath" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Spouse Address:</label> <input type="text" name="spouse_address" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Main Member Relation:</label> <input type="text" name="main_member_relation" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Occupation:</label> <input type="text" name="occupation" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Status:</label> <input type="text" name="status" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Created By:</label> <input type="text" name="created_by" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Updated By:</label> <input type="text" name="updated_by" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Monthly Income:</label> <input type="text" name="monthly_income" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Eid Income:</label> <input type="text" name="eid_income" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Bakrid Income:</label> <input type="text" name="bakrid_income" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Created At:</label> <input type="text" name="created_at" value=""> </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group"> <label>Updated At:</label> <input type="text" name="updated_at" value=""> </div>
            </div>
        </div> <input type="submit" value="Update">
    </form>
</body>

</html>