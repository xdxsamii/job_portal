<!DOCTYPE html>

<html>
<head>
<title>Job House</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link href="{{asset('frontend/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">


</head>



<nav class="navbar navbar-default navbar-fixed-top">  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="{{URL::to('/')}}">Job House</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
          <li><a href="{{URL::to('/#latest_job')}}">Latest Jobs</a></li>
          <li><a href="{{URL::to('/job-list')}}">Job List</a></li>
         
          <li><a class="drop" href="#">Login</a>
                             
                <ul>
                  <li><a href="{{URL::to('/jobseeker-login')}}">Job Seeker</a></li>
                  <li><a href="{{URL::to('/company-login')}}">Company</a></li>
                </ul>
              </li>
            
          </li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav>
    </header>
  </div>
  </nav>
    
<div class="wrapper row4">
  @yield('content')
</div>


<section id="contact">
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_third first">
      <h6 class="heading">Services</h6>
      <p>We promises to ensure the best services.Start your desire career from here.</p>
      <p class="btmspace-15">Thank you for be with us.Stay connected with us</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-skype"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Office Location</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          lake-circus, kolabagan, Dhaka, 1207
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +8801689857471</li>
        <li><i class="fa fa-whatsapp"></i> +8801792095970</li>
        <li><i class="fa fa-envelope-o"></i> jobhouse@jobhouse.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Testimonials</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">H.M Maruf Ahmed</a></h2>
            <p>Junior Developer</p>
            <time class="font-xs block btmspace-10" datetime="2018-05-06">Sunday, 6<sup>th</sup> April 2018</time>
            <p class="nospace">Your guys are doing great.I hope you will be blust&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Fahim Foysal</a></h2>
            <p>ASP.Net Developer</p>

            <time class="font-xs block btmspace-10" datetime="2018-05-27">Sunday, 5<sup>th</sup> April 2018</time>
            <p class="nospace">Very much user friendly and obdient.Best wishes.&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    
  </footer>
</div>

<div class="wrapper quicklinks">
  <nav class="hoc clear"> 
    
    <ul class="nospace">
      <li><a href="{{URL::to('/')}}"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="#latest_job">Latest Jobs</a></li>
      <li><a href="#team">Our Team</a></li>
      <li><a href="#services">Services</a></li>
    </ul>
   
  </nav>
</div>
</section>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="index.html">Job House</a></p>
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>



<script src="{{asset('frontend/layout/scripts/jquery.min.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('frontend/layout/scripts/jquery.flexslider-min.js')}}"></script>
</body>
</html>