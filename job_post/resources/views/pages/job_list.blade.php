
@extends('layout')
@section('content')

        <section id="job_list">

<div class="wrapper bgded overlay" style="background-image:url('images/design/backgrounds/02.jpg');">
     
      <div id="comments">
        <h2 class="center">Job Notices</h2>
        <ul>
      

            @foreach($jobposts as $jobpost)
         <li>
               <article>
               <header>
               <address>
               By <a href="#">{{$jobpost->company_name}}</a>
               </address>
               </header>
               <div class="comcont">
               <p>{{$jobpost->jobpost_title}}</p>
               </div>
               <div class="comcont">
               <p>{{$jobpost->jobpost_description}}</p>
               </div>
               <div class="comcont">
               <p>Salary:{{$jobpost->jobpost_salary}}</p>
               </div>
               </article>
<!--                <form method="POST" action="{{url('/apply_job'.'/'.$jobpost->jobpost_id)}}">
                 <input type="submit" value="Apply Now"></input>
               </form> -->
               <footer><a href="#" onclick="add({{$jobpost->jobpost_id}});">Apply Now! &raquo;</a></footer>

          </li>
          @endforeach
          {{ $jobposts->links() }}
        </ul>
        
      </div>
      </div>
      
      @endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
function add(id)
{

  $.ajax({
    type: "POST",
    url: '/apply_job/'+id,
    data: { id: id, _token: '{{csrf_token()}}' },
    success: function (data) {
       alert("You have applied successfully!");
    },
    error: function (data, textStatus, errorThrown) {
        alert("something went wrong! Maybe you are not logged in");

    },
});
    
}
</script>