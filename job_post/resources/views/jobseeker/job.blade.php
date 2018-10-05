@extends('jobseeker.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!}
@endsection
@section('script')
{{--asset('js/managejob.js')--}}
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
@if(Session::has('applied'))
  <div class="alert alert-success">
      {{ Session::get('applied') }}
  </div>
@endif
{{-- {{dump($job)}} --}}
  <div class="row">
  <div class="col-md-9 col-sm-9">
   @if(isset($job))  
    @forelse($job as $j)

        <div class="well well-default" id="{!!isset($j->id)?$j->id:NULL!!}">
        <div class="row">
          <div class="col-md-9 col-sm-10">
          <a href="{{'/jobseeker/alljobsshow/'.$j->id}}" target="_blank">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 text-center">
                
                  <h2><span class="text-success">{{isset($j->jobtitle )?$j->jobtitle :NULL}}</span></h2>
                </div>
                <div class="col-md-12 text-center">
                  <p>{{isset($j->instruction )?strlen($j->instruction)<100?$j->instruction:substr($j->instruction,0,100):NULL}}
                  </p>
                </div>

              </div>
              <div class="row">
                  <button><span class="text-success">Vacancies </span><span class="badge">{{isset($j->vacancies )?$j->vacancies :NULL}}</span></button>
                  <button><span class="text-warning"> Deadline</span><span class="badge">{{isset($j->deadline )?$j->deadline :NULL}}</span></button>
                  <button><span class="text-primary">Posted At</span><span class="badge">{{isset($j->created_at)?$j->created_at:NULL}}</span></button>
              </div>
            </a>

          </div>
          
        </div>
      

        </div>
        @empty
        <p class="text-warning">No Job Found</p>
        
        @endforelse
          
          </div>
          <div class="col-md-3 col-sm-3">
            @include('jobseeker.partial._rightsidebar')
          </div>
        </div>

       {{isset($job)?($job->links()):NULL}}
        @endif
@if(isset($message))
{{$message}}
@endif
        
@endsection
