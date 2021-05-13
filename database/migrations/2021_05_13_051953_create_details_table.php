<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->String('first_name');
            $table->String('middle_name');
            $table->String('last_name');
            $table->String('email')->unique();
            $table->String('mobile_no')->unique();
            $table->String('otp')->nullable();
            $table->String('email_otp')->nullable();
            $table->String('marital_status');
            $table->String('citizenship');
            $table->String('gender');
            $table->String('father_name');
            $table->String('mother_name');
            $table->String('spouse_name');
            $table->String('nominee_name');
            $table->String('nominee_relation');
            $table->String('nominee_dob');
            $table->string('pan_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->String('upload_pan_no')->nullable();
            $table->String('upload_gst_no')->nullable();
            $table->String('dependents');
            $table->String('upload_qual_doc')->nullable();
            $table->String('res_status');
            $table->String('occupation_id');
            $table->String('pos_income_id');
            $table->String('organization_id');
            $table->String('grade_id');
            $table->String('busi_type_id');
            $table->String('profession_id');
            $table->String('net_mon_incm');
            $table->String('net_yr_incm');
            $table->String('cur_job_year');
            $table->String('cur_job_month');
            $table->String('total_ex_yr');
            $table->String('total_ex_month');
            $table->String('total_bus_yr');
            $table->String('total_bus_month');
            $table->String('total_fn_yr');
            $table->String('total_fn_month');
            $table->String('pos_licence');
            $table->String('total_bus_anum');
            $table->String('verified_by')->nullable();
            $table->String('user_code');
            $table->String('firm_name');
            $table->String('user_status')->nullable();
            $table->String('profile_photo')->nullable();
            $table->String('u_type');
            $table->String('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
