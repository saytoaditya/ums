<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class CrudController extends Controller
{
    public function add(Request $req)
    {
        $user= new Detail;
        $user->first_name=$req->input('first_name');
        $user->middle_name=$req->input('middle_name');
        $user->last_name=$req->input('last_name');
        $user->email=$req->input('email');
        $user->mobile_no=$req->input('mobile_no');
        $user->otp=$req->input('otp');
        $user->email_otp=$req->input('email_otp');
        $user->marital_status=$req->input('marital_status');
        $user->citizenship=$req->input('citizenship');
        $user->gender=$req->input('gender');
        $user->father_name=$req->input('father_name');
        $user->mother_name=$req->input('mother_name');
        $user->spouse_name=$req->input('spouse_name');
        $user->nominee_name=$req->input('nominee_name');
        $user->nominee_relation=$req->input('nominee_relation');
        $user->nominee_dob=$req->input('nominee_dob');
        $user->upload_pan_no=$req->input('upload_pan_no');
        $user->upload_gst_no=$req->input('upload_gst_no');
        $user->dependents=$req->input('dependents');
        $user->upload_qual_doc=$req->input('upload_qual_doc');
        $user->res_status=$req->input('res_status');
        $user->occupation_id=$req->input('occupation_id');
        $user->pos_income_id=$req->input('pos_income_id');
        $user->organization_id=$req->input('organization_id');
        $user->grade_id=$req->input('grade_id');
        $user->busi_type_id=$req->input('busi_type_id');
        $user->profession_id=$req->input('profession_id');
        $user->net_mon_incm=$req->input('net_mon_incm');
        $user->net_yr_incm=$req->input('net_yr_incm');
        $user->cur_job_year=$req->input('cur_job_year');
        $user->cur_job_month=$req->input('cur_job_month');
        $user->total_ex_yr=$req->input('total_ex_yr');
        $user->total_ex_month=$req->input('total_ex_month');
        $user->total_bus_yr=$req->input('total_bus_yr');
        $user->total_bus_month=$req->input('total_bus_month');
        $user->total_fn_yr=$req->input('total_fn_yr');
        $user->total_fn_month=$req->input('total_fn_month');
        $user->pos_licence=$req->input('pos_licence');
        $user->total_bus_anum=$req->input('total_bus_anum');
        $user->verified_by=$req->input('verified_by');
        $user->user_code=$req->input('user_code');
        $user->firm_name=$req->input('firm_name');
        $user->user_status=$req->input('user_status');
        $user->profile_photo=$req->input('profile_photo');
        $user->u_type=$req->input('u_type');
        $user->password=$req->input('password');
        $user->Save();
        return redirect('home');
    }
    public function list()
    {
        $data=Detail::all();
        return view('list',['data'=>$data]);
    }
    public function delete($id)
    {
        Detail::find($id)->delete();
        return redirect('list');
    }
    public function edit($id)
    {   
        $edit= Detail::find($id);
        return view('update',['edit'=>$edit]);
    }
    public function update(Request $req)
    {
        $user= Detail::find($req->id);;
        $user->first_name=$req->input('first_name');
        $user->middle_name=$req->input('middle_name');
        $user->last_name=$req->input('last_name');
        $user->email=$req->input('email');
        $user->mobile_no=$req->input('mobile_no');
        $user->otp=$req->input('otp');
        $user->email_otp=$req->input('email_otp');
        $user->marital_status=$req->input('marital_status');
        $user->citizenship=$req->input('citizenship');
        $user->gender=$req->input('gender');
        $user->father_name=$req->input('father_name');
        $user->mother_name=$req->input('mother_name');
        $user->spouse_name=$req->input('spouse_name');
        $user->nominee_name=$req->input('nominee_name');
        $user->nominee_relation=$req->input('nominee_relation');
        $user->nominee_dob=$req->input('nominee_dob');
        $user->upload_pan_no=$req->input('upload_pan_no');
        $user->upload_gst_no=$req->input('upload_gst_no');
        $user->dependents=$req->input('dependents');
        $user->upload_qual_doc=$req->input('upload_qual_doc');
        $user->res_status=$req->input('res_status');
        $user->occupation_id=$req->input('occupation_id');
        $user->pos_income_id=$req->input('pos_income_id');
        $user->organization_id=$req->input('organization_id');
        $user->grade_id=$req->input('grade_id');
        $user->busi_type_id=$req->input('busi_type_id');
        $user->profession_id=$req->input('profession_id');
        $user->net_mon_incm=$req->input('net_mon_incm');
        $user->net_yr_incm=$req->input('net_yr_incm');
        $user->cur_job_year=$req->input('cur_job_year');
        $user->cur_job_month=$req->input('cur_job_month');
        $user->total_ex_yr=$req->input('total_ex_yr');
        $user->total_ex_month=$req->input('total_ex_month');
        $user->total_bus_yr=$req->input('total_bus_yr');
        $user->total_bus_month=$req->input('total_bus_month');
        $user->total_fn_yr=$req->input('total_fn_yr');
        $user->total_fn_month=$req->input('total_fn_month');
        $user->pos_licence=$req->input('pos_licence');
        $user->total_bus_anum=$req->input('total_bus_anum');
        $user->verified_by=$req->input('verified_by');
        $user->user_code=$req->input('user_code');
        $user->firm_name=$req->input('firm_name');
        $user->user_status=$req->input('user_status');
        $user->profile_photo=$req->input('profile_photo');
        $user->u_type=$req->input('u_type');
        $user->password=$req->input('password');
        $user->Save();
        return redirect('list');
    }
}
