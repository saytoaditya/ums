@extends('layouts.header')
@extends('layouts.navigation')
<head>
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link rel="stylesheet" href="assets/styles/style.min.css">

<!-- Material Design Icon -->
<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

<!-- mCustomScrollbar -->
<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

<!-- Waves Effect -->
<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

<!-- Sweet Alert -->
<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

<!-- Percent Circle -->
<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

<!-- Chartist Chart -->
<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

<!-- FullCalendar -->
<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

<!-- Color Picker -->
<link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
<style>
.tbl-container{

    overflow:scroll;
}
</style>

</head>
<body>
<div id="wrapper">
	<div class="main-content">
        <a href="/add"><button class="btn btn-success mb-4">add New user</button></a>

      <div class="tbl-container">
      <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" >
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">first_name</th>
                        <th scope="col">middle_name</th>
                        <th scope="col">last_name</th>
                        <th scope="col">email</th>
                        <th scope="col">mobile_no</th>
                        <th scope="col">marital_status</th>
                        <th scope="col">citizenship</th>
                        <th scope="col">gender</th>
                        <th scope="col">father_name</th>
                        <th scope="col">mother_name</th>
                        <th scope="col">spouse_name</th>
                        <th scope="col">nominee_name</th>
                        <th scope="col">nominee_relation</th>
                        <th scope="col">nominee_dob </th>
                        <th scope="col">pan_no</th>
                        <th scope="col">upload_pan_no</th>
                        <th scope="col">gst_no</th>
                        <th scope="col">upload_gst_no</th>
                        <th scope="col">dependents</th>
                        <th scope="col">qualification</th>
                        <th scope="col">upload_qual_doc</th>
                        <th scope="col">res_status</th>
                        <th scope="col">occupation_id</th>

                        <th scope="col">grade_id</th>
                        <th scope="col">busi_type_id</th>
                        <th scope="col">profession_id</th>
                        <th scope="col">net_mon_incm</th>
                        <th scope="col">net_yr_incm</th>
                        <th scope="col">cur_job_year </th>
                        <th scope="col">cur_job_month</th>
                        <th scope="col">total_ex_yr</th>
                        <th scope="col">total_ex_month</th>
                        <th scope="col">total_bus_yr</th>
                        <th scope="col">total_bus_month</th>
                        <th scope="col">total_fn_yr</th>
                        <th scope="col">total_fn_month</th>
                        <th scope="col">pos_licence</th>
                        <th scope="col">total_bus_anum</th>

                        <th scope="col">verified_by</th>
                        <th scope="col">firm_name</th>
                        <th scope="col">user_status</th>
                        <th scope="col">profile_photo</th>
                        <th scope="col">u_type</th>
                        <th scope="col">password</th>
                        <th scope="col">Operations</th>
                        </tr>
                    </thead>
                <tbody>
                   @foreach($data as $item)
                   <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->first_name}}</td>
                        <td scope="col">{{$item->middle_name}}</td>
                        <td scope="col">{{$item->last_name}}</td>
                        <td scope="col">{{$item->email}}</td>
                        <td scope="col">{{$item->mobile_no}}</td>
                        <td scope="col">{{$item->marital_status}}</td>
                        <td scope="col">{{$item->citizenship}}</td>
                        
                        <td scope="col">{{$item->gender}}</td>
                        <td scope="col">{{$item->father_name}}</td>
                        <td scope="col">{{$item->mother_name}}</td>
                        <td scope="col">{{$item->spouse_name}}</td>
                        <td scope="col">{{$item->nominee_name}}</td>
                        <td scope="col">{{$item->nominee_relation}}</td>
                        <td scope="col">{{$item->nominee_dob }}</td>
                        <td scope="col">{{$item->pan_no}}</td>
                        <td scope="col">{{$item->upload_pan_no}}</td>
                        <td scope="col">{{$item->gst_no}}</td>
                        <td scope="col">{{$item->upload_gst_no}}</td>
                        <td scope="col">{{$item->dependents}}</td>
                        <td scope="col">{{$item->qualification}}</td>
                        <td scope="col">{{$item->upload_qual_doc}}</td>
                        <td scope="col">{{$item->res_status}}</td>
                        <td scope="col">{{$item->occupation_id}}</td>
                        <td scope="col">{{$item->grade_id}}</td>
                        <td scope="col">{{$item->busi_type_id}}</td>
                        <td scope="col">{{$item->profession_id}}</td>
                        <td scope="col">{{$item->net_mon_incm}}</td>
                        <td scope="col">{{$item->net_yr_incm}}</td>
                        <td scope="col">{{$item->cur_job_year }}</td>
                        <td scope="col">{{$item->cur_job_month}}</td>
                        <td scope="col">{{$item->total_ex_yr}}</td>
                        <td scope="col">{{$item->total_ex_month}}</td>
                        <td scope="col">{{$item->total_bus_yr}}</td>
                        <td scope="col">{{$item->total_bus_month}}</td>
                        <td scope="col">{{$item->total_fn_yr}}</td>
                        <td scope="col">{{$item->total_fn_month}}</td>
                        <td scope="col">{{$item->pos_licence}}</td>
                        <td scope="col">{{$item->total_bus_anum}}</td>
                        <td scope="col">{{$item->verified_by}}</td>
                        <td scope="col">{{$item->firm_name}}</td>
                        <td scope="col">{{$item->user_status}}</td>
                        <td scope="col"><img src="{{$item->profile_photo}}"alt="profile_photo"></td>
                        <td scope="col">{{$item->u_type}}</td>
                        <td scope="col">{{$item->password}}</td>
                        <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
                        <td><a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>  
                   </tr>
                   @endforeach
                </tbody>
        </table></div>
    </div>
</div>  
</body>
  