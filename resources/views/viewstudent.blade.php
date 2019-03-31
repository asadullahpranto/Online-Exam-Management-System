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
           <a href="{{route('studentno')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> STUDENTS</a>

         </li><hr style="border-color: white;">
         <li>
           <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> EXAMS</a>

           <ul class="dropdown-menu bg-success">
             <li class="dropdown-item"><a href="{{route('examlistTeacher')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
             <li class="dropdown-item"><a href="{{route('examname')}}" class="dropdown-link text-white" style="text-decoration: none;">Create Exam</a></li>
             <li class="dropdown-item"><a href="{{route('examtrash')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Trash</a></li>
           </ul>
         </li>
       </ul>
     </div>

     <!-- First Column End -->


     <!-- Second Column Starts -->

     <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

       <div class="mt-3">
         <h6 class="text-primary">Home / <span class="text-white">Student List</h6>
         <hr>
       </div>

       <div>
         <h3 class="text-info mb-3">Student Lists</h3>
       </div>

       <!--Table -->

       <table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
         <thead class="table-success">
           <tr>
             <th>No.</th>
             <th>Student Name</th>
             <th>Reg. No.</th>
             <th>Dept.</th>
             <th>Marks</th>
           </tr>
         </thead>

         <tbody>

           @php $i=1 @endphp
           @foreach($e->results as $r)
           <tr>
             <td>{{$i}}</td>
             <td>{{$r->student->name}}</td>
             <td>{{$r->student->registration}}</td>
             <td>{{$r->student->department}}</td>
             <td>{{$r->score}}</td>
           </tr>
           @php $i++ @endphp
           @endforeach

         </tbody>
       </table><hr><br><br><br><br><br><br><br>


     </div>

     <!-- Second Column Ends -->

   </div>
 </div>

 @endsection
