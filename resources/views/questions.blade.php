
@extends('teacher.master')

@section('content')
<div class="container">
<div class="row">

  <!--First Column -->

  <div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
    <ul class="list-unstyled mt-5">
      <li>
        <a href="{{route('teacherdash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
      </li><hr style="border-color: white;">
      <li>
        <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS INFO</a>

        <ul class="dropdown-menu bg-success">
          <li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
          <li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
          <li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Trash</a></li>
        </ul>
      </li><hr style="border-color: white;">

      <li>
        <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-user"></i> STUDENT INFO</a>

        <ul class="dropdown-menu bg-success">
          <li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Student List</a></li>
          <li class="dropdown-item"><a href="/examlistforrank" class="dropdown-link text-white" style="text-decoration: none;">Student Rank</a></li>
        </ul>
      </li><hr style="border-color: white;">
      <li>
        <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-download"></i> EXPORT IMPORT</a>

        <ul class="dropdown-menu bg-success">
          <li class="dropdown-item"><a href="/exportquestion" class="dropdown-link text-white" style="text-decoration: none;">Export Question</a></li>
          <li class="dropdown-item"><a href="{{route('export')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
          <li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- First Column End -->


  <!-- Second Column Starts -->

  <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

    <div class="mt-3">
      <h6 class="text-primary">Home / <span class="text-white">Create Exam</h6>
      <hr>
    </div>

    <div class="container" style="background-color: #cfd8dc;">
      <h4 class="text-uppercase text-center my-3 text-info">Exam Title: {{$e->examtitle}}</h4>
      <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="text-center"><b>Exam Date: {{$e->examdate}}</b></div>
        </div>
        <div class="col-md-4">
            <div class="text-center"><b>Total Time: {{$e->totaltime}} min</b></div>
        </div>
        <div class="col-md-4">
            <div class="text-center"><b>Full Marks: {{$e->marks}}</b></div>
        </div>
      </div><br>
      <div style="float: right;">
        <div class="btn btn-outline-info btn-sm mr-1">
          <a href="/editexamdetail/{{$e->id}}"  style="text-decoration: none;">Edit</a>
        </div>
        <div class="btn btn-outline-info btn-sm">
          <a href="/deleteexamdetail/{{$e->id}}"  style="text-decoration: none;">Delete</a>
        </div>
      </div><br><hr>

      @php  $i=1;   @endphp

      @foreach($qs as $q)
      <lebel for="question">{{$i}}. {{ $q->question }}</lebel>

      @php $i++;  @endphp
      <div class="row my-2 clearfix">
        <div class="col-5 ml-5">A. {{ $q->a }}</div>
        <div class="col-5">B. {{ $q->b }}</div>
      </div>

      <div class="row mb-3 my-2">
        <div class="col-5 ml-5">C. {{ $q->c }}</div>
        <div class="col-5">D. {{ $q->d }}</div>
      </div>
      <div>
        <div class="ml-5">Answer: {{ $q->answer }}</div>
      </div>
      <div style="float: right">
        <div class="btn btn-outline-info btn-sm mr-1">
          <a href="/editquestion/{{$q->id}}"  style="text-decoration: none;">Edit</a>
        </div>
        <div class="btn btn-outline-info btn-sm">
          <a href="/deletequestion/{{$q->id}}"  style="text-decoration: none;">Delete</a>
        </div>
      </div>
      <div class="clearfix">

      </div>
      @endforeach
      <div class="text-center">
        <button type="submit" class="btn btn-outline-info btn-sx mr-2 mb-5 mt-3" style="width: 150px;"><a href="/addquestion/{{$e->id}}" class="btn-sm"  style="text-decoration: none;">Add Question</a></button>
      </div>
    </div><br>

  </div>
</div>
</div>


@endsection
