<!-- marriage_certificate_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Marriage Certificate Form</title>
    <style>
        /* Add any desired CSS styling here */
    </style>
</head>
<body>
    <h1>Marriage Certificate Form</h1>
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

        <input type="submit" value="Submit">
    </form>
</body>
</html>
