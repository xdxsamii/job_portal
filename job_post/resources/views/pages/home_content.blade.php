@extends('layout')
@section('content')

<body id="top">
<div class="bgded overlay" style="background-image:url('frontend/images/design/backgrounds/01.jpg');"> 
 <div id="pageintro" class="hoc clear"> 
    <div class="flexslider basicslider">
      <ul class="slides">

        <li>
            <h1 class="heading">Jobs are all around</h1>

        <div class="row">
             
              <div class="col-lg-6">
                <div class="input-group">
                <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
              </div>
            

            <footer>
            <p id="search" class="heading">Search for Your Job</p>
            <li><a class="btn" href="{{URL::to('/jobseeker-login')}}">Sign Up Here!</a></li>
            </footer>


         

        </li>
        <li>

         <div class="row">

              <div class="col-lg-6">
                <div class="input-group">
                    <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
            </div>
          
            <p class="heading">Dream comes true</p>
            <h2 class="heading">Build Your career</h2>

            

            <footer>
              <ul class="nospace inline pushright">
                <li><a class="btn" href="{{URL::to('/#latest_job')}}">Latest Jobs</a></li>
              </ul>
            </footer>
          </article>
        </li>
        <li>
          <article>
            <p class="heading">Say No! to Unemployment</p>
            <h2 class="heading">Develop Your Skill</h2>
            <p>Find the best oppurtunaties</p>

            <div class="row">

              <div class="col-lg-6">
                <div class="input-group">
                   <form class="form-control" action="{{URL::to('/search')}}" method="POST" role="search">
             {{ csrf_field() }}
                  <input type="text" name="q" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit">Go!</button>
                  </span>
                  </form>

                </div>
               </div>
            </div>

          </article>
        </li>
      </ul>
    </div>
    
  </div>
  
</div>


<section class="hoc container clear" id="latest_job"> 
    
    <div class="center btmspace-80">
      <h2 class="heading nospace">Latest jobs</h2>
    </div>
    <ul class="row">
    @foreach($jobposts as $jobpost)
      <li class="col-sm-4">
        <article><a href="#"><i class="fa fa-hand-o-right"></i></a>
          <h6 class="heading">{{$jobpost->company_name}}</h6>
          <p>{{$jobpost->jobpost_title}}&hellip;</p>
          <p>{{$jobpost->jobpost_description}}&hellip;</p>
          <p>{{$jobpost->jobpost_salary}}&hellip;</p>
          <footer><a href="#">Apply Now! &raquo;</a></footer>
        </article>
      </li>
    @endforeach
   

    </ul>
    
    <div class="clear"></div>
  </section>
</div>


<section id="services">
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <div class="center btmspace-80">
      <h2 class="heading nospace">Our Services</h2>
      
    </div>
    <ul class="nospace group">
      <li class="one_half first btmspace-30">
        <article class="group">
          <div class="fa fa-bullhorn" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Recruitment Notice</h3>
            <p>Company or Organization who alreary have their trade lisence can post the recruitment notice.&hellip;</p>
            <footer><a href="{{URL::to('/post-job-notice')}}">Post a Notice &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_half btmspace-30">
        <article class="group">
        <div class="fa fa-registered" style="font-size:48px;color:#FF5723"></div>
          
          <div class="one_half">
            <h3 class="heading font-x1">Search your job</h3>
            <p>Job seeker who r seaching for best job then it is the best place&hellip;</p>
            <footer><a href="{{URL::to('/jobseeker-login')}}">Sign In Here &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_half first btmspace-30">
        <article class="group">
          <div class="fa fa-comments" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Complains & Comments</h3>
            <p>If you are troubling any kinds of problem with this system then let us know.To get better usage give your feedback please.&hellip;</p>
            <footer><a href="#" target="_top">Send Email &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_half btmspace-30">
        <article class="group">
          <div class="fa fa-newspaper-o" style="font-size:48px;color:#FF5723"></div>
          <div class="one_half">
            <h3 class="heading font-x1">Advertisement</h3>
            <p>To give advertisemet through our website then feel free to contact us&hellip;</p>
            <footer><a href="#contact">Contact Us &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    
    
    <div class="clear"></div>
  </main>
</div>
</div>
</section>



<div class="wrapper bgded overlay" style="background-image:url('frontend/images/design/backgrounds/04.png');">
  <section id="team" class="hoc container clear"> 
    
    <div class="btmspace-80 center">
      <h2 class="heading nospace">Our Team</h2>
    </div>
    <ul class="nospace group">
      
      <li class="one_quarter">
        <article class="excerpt"><a href="#"><img class="profile" src="{{URL::to('frontend/images/design/anik.jpg')}}" alt=""></a>
          <div class="w3-animate-fading">
            <h6 class="heading font-x1">Mehedi Hasan Aunik</h6>
            <p> UI & Ux Developer&hellip;</p>
            <footer><a class="btn" href="#">View Portfolio &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_quarter">
        <article class="excerpt"><a href="#"><img class="profile" src="{{URL::to('frontend/images/design/sami.jpg')}}" alt=""></a>
          <div class="w3-animate-fading">
            <h6 class="heading font-x1">Abu Sufian Al Sami</h6>
            <p>Back-End Developer</p>
            <footer><a class="btn" href="#">View Portfolio &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_quarter">
        <article class="excerpt"><a href="#"><img class="profile" src="{{URL::to('frontend/images/design/ali.jpg')}}" alt=""></a>
          <div class="w3-animate-fading">
            <h6 class="heading font-x1">Mohammad Ali</h6>
            <p>Testing & Analysis</p>
            <footer><a class="btn" href="#">View Portfolio &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
   
  </section>


@endsection