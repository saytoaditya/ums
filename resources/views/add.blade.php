<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<BUtton class="btn btn-warning"><a href="/list">Back</a></BUtton>
<form class="container" method="post" action="add">
@csrf
    <div class="form-group">
    <label >First Name</label>
    <input type="first_name" placeholder="First Name" name="first_name">
    </div>
    <div class="form-group">
    <label >Middle Name</label>
    <input type="'middle_name" placeholder="middle_name" name="middle_name">
    </div>
    <div class="form-group">
    <label >last name</label>
    <input type="last_name" placeholder="last_name" name="last_name">
    </div>
    <div class="form-group">
    <label >email</label>
    <input type="email" placeholder="email" name="email">
    </div>
    <div class="form-group">
    <label>mobile_no</label>
    <input type="mobile_no" placeholder="mobile_no" name="mobile_no">
    </div>
    <div class="form-group">
    <label>otp</label>
    <input type="otp" placeholder="otp" name="otp">
    </div>
    <div class="form-group">
    <label>email_otp</label>
    <input type="email_otp" placeholder="email_otp" name="email_otp">
    </div>
    <div class="form-group">
    <label>marital_status</label>
    <input type="marital_status" placeholder="marital_status" name="marital_status">
    </div>
    <div class="form-group">
    <label>citizenship</label>
    <input type="citizenship" placeholder="citizenship" name="citizenship">
    </div>
    <div class="form-group">
    <label>gender</label>
    <input type="gender" placeholder="gender" name="gender">
    </div>
    <div class="form-group">
    <label>father_name</label>
    <input type="father_name" placeholder="father_name" name="father_name">
    </div>
    <div class="form-group">
    <label>mother_name</label>
    <input type="mother_name" placeholder="mother_name" name="mother_name">
    </div>
    <div class="form-group">
    <label>spouse_name</label>
    <input type="spouse_name" placeholder="spouse_name" name="spouse_name">
    </div>
    <div class="form-group">
    <label>nominee_name</label>
    <input type="nominee_name" placeholder="nominee_name" name="nominee_name">
    </div>
    <div class="form-group">
    <label>nominee_relation</label>
    <input type="nominee_relation" placeholder="nominee_relation" name="nominee_relation">
    </div>
    <div class="form-group">
    <label>nominee_dob</label>
    <input type="date" placeholder="nominee_dob" name="nominee_dob">
    </div>
    <div class="form-group">
    <label>pan_no</label>
    <input type="pan_no" placeholder="pan_no" name="pan_no">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">upload_pan_no</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload_pan_no">
    </div>
    <div class="form-group">
    <label>gst_no</label>
    <input type="gst_no" placeholder="gst_no" name="gst_no">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">upload_gst_no</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload_gst_no">
    </div>
    <div class="form-group">
    <label>dependents</label>
    <input type="dependents" placeholder="dependents" name="dependents">
    </div>
    
    <div class="form-group">
    <label for="exampleFormControlFile1">upload_qual_doc</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload_qual_doc">
    </div>
    <div class="form-group">
    <label>res_status</label>
    <input type="res_status" placeholder="res_status" name="res_status">
    </div>
    <div class="form-group">
    <label>occupation_id</label>
    <input type="occupation_id" placeholder="occupation_id" name="occupation_id">
    </div>
    <div class="form-group">
    <label>pos_income_id</label>
    <input type="pos_income_id" placeholder="pos_income_id" name="pos_income_id">
    </div>
    <div class="form-group">
    <label>organization_id</label>
    <input type="organization_id" placeholder="organization_id" name="organization_id">
    </div>
    <div class="form-group">
    <label>grade_id</label>
    <input type="grade_id" placeholder="grade_id" name="grade_id">
    </div>
    <div class="form-group">
    <label>busi_type_id</label>
    <input type="busi_type_id" placeholder="busi_type_id" name="busi_type_id">
    </div>
    <div class="form-group">
    <label>profession_id</label>
    <input type="profession_id" placeholder="profession_id" name="profession_id">
    </div>
    <div class="form-group">
    <label>net_mon_incm</label>
    <input type="net_mon_incm" placeholder="net_mon_incm" name="net_mon_incm">
    </div>
    <div class="form-group">
    <label>net_yr_incm</label>
    <input type="net_yr_incm" placeholder="net_yr_incm" name="net_yr_incm">
    </div>
    <div class="form-group">
    <label>cur_job_year</label>
    <input type="date" placeholder="cur_job_year" name="cur_job_year">
    </div>
    <div class="form-group">
    <label>cur_job_month</label>
    <input type="cur_job_month" placeholder="cur_job_month" name="cur_job_month">
    </div>
    <div class="form-group">
    <label>total_ex_yr</label>
    <input type="total_ex_yr" placeholder="total_ex_yr" name="total_ex_yr">
    </div>
    <div class="form-group">
    <label>total_ex_month</label>
    <input type="total_ex_month" placeholder="total_ex_month" name="total_ex_month">
    </div>
    <div class="form-group">
    <label>total_bus_yr</label>
    <input type="total_bus_yr" placeholder="total_bus_yr" name="total_bus_yr">
    </div>
    <div class="form-group">
    <label>total_bus_month</label>
    <input type="total_bus_month" placeholder="total_bus_month" name="total_bus_month">
    </div>
    <div class="form-group">
    <label>total_fn_yr</label>
    <input type="total_fn_yr" placeholder="total_fn_yr" name="total_fn_yr">
    </div>
    <div class="form-group">
    <label>total_fn_month</label>
    <input type="total_fn_month" placeholder="total_fn_month" name="total_fn_month">
    </div>
    <div class="form-group">
    <label>pos_licence</label>
    <input type="pos_licence" placeholder="pos_licence" name="pos_licence">
    </div>
    <div class="form-group">
    <label>total_bus_anum</label>
    <input type="total_bus_anum" placeholder="total_bus_anum" name="total_bus_anum">
    </div>
    <div class="form-group">
    <label>verified_by</label>
    <input type="verified_by" placeholder="verified_by" name=verified_by"verified_by">
    </div>
    <div class="form-group">
    <label>user_code</label>
    <input type="user_code" placeholder="user_code" name="user_code">
    </div>
    <div class="form-group">
    <label>firm_name</label>
    <input type="firm_name" placeholder="firm_name" name="firm_name">
    </div>
    <div class="form-group">
    <label>user_status</label>
    <input type="firm_name" placeholder="firm_name" name="user_status">
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">profile_photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_photo">
    </div>

    
    <div class="form-group ">
      <label for="inputState">u_type</label>
      <select id="inputState" class="form-control" name="u_type">
        <option selected>Choose...</option>
        
        <option>Admin</option>
        <option>National Head</option>
        <option> State Head</option>
        <option> City Head</option>
        <option> Cluster Head</option>
        <option> Coordinator</option>
        <option> Social Media Head</option>
      </select>
    </div>
    <div class="form-group">
    <label>password</label>
    <input type="password" placeholder="password" name="password">
    </div>
    



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
