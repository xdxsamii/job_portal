@extends('jobseeker_layout')
@section('jobseeker_content')

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('frontend/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

      <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        <h2 class="center">Posted Job</h2>
        <ul>

      

            @foreach($data as $jobpost)
         <li>
               <article>
               <header>
			 Company Name:<a href="#">{{$jobpost->company_name}}</a>
               </header>
               <div class="comcont">
             <p>Job Title:{{$jobpost->jobpost_title}}</p>
               </div>

               <div class="comcont">
             <p>Job Description:{{$jobpost->jobpost_description}}</p>
               </div>
               <div class="comcont">
               <p>Salary:{{$jobpost->jobpost_salary}}</p>
               </div>
               </article>

          </li>
          @endforeach
           {{ $data->links() }}

        </ul>
        
      </div>
      </div>
@endsection