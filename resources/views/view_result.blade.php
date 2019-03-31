 @extends('student.master')
 @section('content')

 <div>
   <hr style="border-color: mediumseagreen;">

   <div class="container">
     <div class="row">
       <div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
         <ul class="list-unstyled mt-5">
           <li>
             <a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
           </li><hr style="border-color: white;">
           <li>
             <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> EXAMS</a>
             <ul class="dropdown-menu bg-success">
               <li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
               <li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Result</a></li>
             </ul>

           </li><hr style="border-color: white;">
           <li>
             <a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> HOME WORK</a>

             <ul class="dropdown-menu bg-success">
               <li class="dropdown-item"><a href="{{route('homeworklist')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework List</a></li>
               <li class="dropdown-item"><a href="{{route('homeworkresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework Result</a></li>
             </ul>
           </li>
         </ul>
       </div>

       <div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

         <div class="mt-3">
           <p class="text-primary">Home / <span class="text-white">Dashboard</p>
           <hr>
         </div>

         <div>
           <h3 class="text-info">Exam Status</h3>
         </div><hr>

         <!--
         <table class="table table-responsive-sm table-responsive-md table-striped table-bordered">
           <thead class="table-success">
             <tr>
               <th class="text-center">Total Questions</th>
               <th class="text-center">Wrong Answer</th>
               <th class="text-center">Correct Answer</th>
               <th class="text-center">Obtained marks</th>
             </tr>
           </thead>

           <tbody>
             <td class="text-center">{{count($e->questions)}}</td>
             <td class="text-center">{{$marks}}</td>
             <td class="text-center">{{count($e->questions)-$marks}}</td>
             <td class="text-center">1x{{$marks}} = {{$marks}}</td>
           </tbody>
         </table>
       -->
            <div>
               <!--Upcoming Exam Cards-->
               <div class="card mx-auto mb-5" style="background-color: #26a69a;">
                   <img class="card-img-top ml-5 mt-2 mx-auto" src="{{asset('icon/icon.png')}}" style="height: 100px; width: 100px;" alt="Card image cap">
                   <div class="card-body">
                     <h6 class="card-title text-uppercase text-center">Exam title: <span style="color: #e0f2f1;">{{$e->examtitle}}</span></h6>
                     <ul class="list-unstyled">
                       <li class="card-text text-center">Total Questions: {{count($e->questions)}}</li>
                       <li class="card-text text-center">Wrong Answer: {{count($e->questions)-$marks}}</li>
                       <li class="card-text text-center">Correct Answer: {{$marks}}</li>
                       <li class="card-text text-center">Obtained marks: 1x{{$marks}} = {{$marks}}</li>
                     </ul>
                   </div>
               </div>
            </div><br>





         </div>

       </div>

     </div>
   </div>

 @endsection
