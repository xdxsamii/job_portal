<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class JobseekerController extends Controller
{
     public function index()
    {
    	return view('pages.jobseeker_login');
    }

     public function profile_setting()
    {
      
      $jobseeker = DB::table('jobseeker')->where('jobseeker_id',Session::get('jobseeker_id'))->first();
      return view('jobseeker.profile_setting',compact('jobseeker'));
     
    }



    public function applied()
    {

      //return view('.message');
    }




     public function message()
    {
      return view('jobseeker.message');
    }
     public function applied_job()
    {
      $jobseeker_id=Session::get('jobseeker_id');

        $data=DB::table('application')->leftJoin('jobpost', 'jobpost.jobpost_id', '=', 'application.jobpost_id')->leftJoin('company', 'company.id', '=', 'jobpost.company_id')->where('jobseeker_id', $jobseeker_id)->paginate(3);

        //return View::make("company/posted_job")->with('data',$data);
        return view('jobseeker.applied_job',compact('data'));
    }

     public function logout()
    {
      Session::flush();
      return view('pages.jobseeker_login');
    }

     




        public function signup(Request $request)
    {
    	// print_r($request->input());
    	 $result=DB::insert("insert into jobseeker(jobseeker_name,jobseeker_email,jobseeker_password,jobseeker_phone,jobseeker_jobtype,jobseeker_cv,jobseeker_image) value(?,?,?,?,?,?,?)",[$request->input('jobseeker_name'),$request->input('jobseeker_email'),$request->input('jobseeker_password'),$request->input('jobseeker_phone'),$request->input('job_type'),$request->input('jobseeker_cv'),$request->input('jobseeker_image')]);


	    	 if($result){
	         Session::put('message','Registered Successfully!');
	          return Redirect::to('/jobseeker-login');
	    }
	    else{
	         Session::put('message','Email or Password Invalid');
	         return Redirect::to('/jobseeker-login');
	         	    }

    	
    }

       public function profile(Request $request)
    {

     
    	 $jobseeker_email=$request->email;

          $jobseeker_password=$request->password;

           $lresult=DB::table('jobseeker')
                  ->where('jobseeker_email',$jobseeker_email)
                  ->where('jobseeker_password',$jobseeker_password)
                  ->first();


                  if ($lresult) {
                    Session::put('jobseeker_name',$lresult->jobseeker_name);
                    Session::put('jobseeker_email',$lresult->jobseeker_email);
                    Session::put('jobseeker_password',$lresult->jobseeker_password);
                    Session::put('jobseeker_phone',$lresult->jobseeker_phone);
                    Session::put('jobseeker_id',$lresult->jobseeker_id);

                   return Redirect::to('/jobseeker-profile-setting');

                     //return var_dump($lresult);
                  }
                  else
                  {

                    Session::put('message','Email or Password Invalid');
                    return Redirect::to('/jobseeker-login');
                  }
    }

    public function editjobseeker($jobseeker_id){
      $jobseeker=DB::table('jobseeker')->where('jobseeker_id',$jobseeker_id)->first();
          return view('jobseeker.edit')->with('jobseeker',$jobseeker);
    }

    public function profile_update(Request $request)
    {
      DB::table('jobseeker')->where('jobseeker_id',Session::get('jobseeker_id'))->update([
        'jobseeker_name'=>$request->jobseeker_name,
        'jobseeker_email'=>$request->jobseeker_email,
        'jobseeker_password'=>$request->jobseeker_password,
        'jobseeker_phone'=>$request->jobseeker_phone

        ]);
            return Redirect::to('/jobseeker-profile-setting');;

    }

  
}
