<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.4.2/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('css/test.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
 <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
  <script type="text/javascript" src="{{asset('js/bootstrapjquery.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

 <title>Exam Management System</title>
 <link rel="icon" type="icon" href="{{asset('icon/icon.png')}}">

 <style>
   .dropdown-menu li:hover{
     background-color: tomato;
   }
   .btn-block:hover{
     background-color: tomato;
   }
 </style>

</head>

<body style="background-color: #202a3f;">

 <div class="container"><br>

   <!-- Navbar Started Hare -->

   <nav class="navbar navbar-expand-md sticky-top navbar-light bg-success rounded">

     <button class="navbar-toggler" data-toggle="collapse" data-target="#target">
       <span class="navbar-toggler-icon"></span>
     </button>

     <a class="navbar-brand" href="{{route('teacherdash')}}"><img src="{{asset('icon/icon.png')}}" style="height: 40px;"></a>

     <div class="collapse navbar-collapse" id="target">
       <ul class="navbar-nav mx-auto">
         <li class="nav-item">
           <a href="{{route('teacherdash')}}" class="nav-link btn-outline-info rounded text-white pr-3">HOME</a>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">ABOUT</a>
         </li>

         <li class="nav-item">
           <a href="/examlistTeacher" class="nav-link btn-outline-info rounded text-white pr-3">EXAM LIST</a>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link btn-outline-info rounded text-white pr-3">NOTICE BOARD</a>
         </li>

         <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white" data-toggle="dropdown" data-target="dropdown_target pr-3">CONTACT US</a>

           <div class="dropdown-menu bg-info" aria-labelledby="dropdown_target">
             <a href="#" class="dropdown-item text-white"><i class="far fa-envelope"></i> Via Email</a>
             <a href="#" class="dropdown-item text-white"><i class="fab fa-facebook-messenger"></i> Via Messenger</a>
             <a href="#" class="dropdown-item text-white"><i class="fas fa-phone-volume"></i> Via Phone Call</a>
           </div>

         </li>

         <li class="nav-item dropdown">
           <a href="#" class="nav-link dropdown-toggle btn-outline-info rounded text-white pr-3" data-toggle="dropdown"><i class="fas fa-user"></i><span class="text-uppercase"> {{Auth::guard('teachers')->user()->name}}</span></a>

           <div class="dropdown-menu bg-info divide">
             <a href="{{route('homepage')}}" class="dropdown-item text-white text-center">Settings</a>
             <form action="/logout" method="post">
               @csrf
               <button type="submit" name="button" class="btn-info btn-block" style="border: none;">Logout</button>
             </form>
           </div>
         </li>

         <!--LOGIN DISABLED
         <li class="nav-item">
           <a href="#" class="nav-link btn-outline-info rounded text-white pr-4">LOGIN</a>
         </li>

       -->

       </ul>

       <!-- Search Box -->

       <ul class="navbar-nav ml-auto">
         <form>
           <div class="input-group">
             <input class="form-control" type="text" name="search" placeholder="Search">
             <div class="input-group-btn">
               <button class="btn btn-info" style="width: 50px;" type="submit"><i class="fas fa-search"></i></button>
             </div>
           </div>
         </form>
       </ul>

       <!--End-->
     </div>

   </nav>

   <!-- Navbar End Hare -->
   <hr style="border-color: mediumseagreen;">


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
             <li class="dropdown-item"><a href="{{route('studentno')}}" class="dropdown-link text-white" style="text-decoration: none;">Export Result</a></li>
             <li class="dropdown-item"><a href="{{route('import')}}" class="dropdown-link text-white" style="text-decoration: none;">Import Exam</a></li>
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
         <h4 class="text-info mb-3">Student Lists</h4>
       </div>

       <!--Table -->

       <table id="example" class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
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
       </table><hr><br><br>
       <button id="pdf" class="btn btn-info" style="float: right;">DOWNLOAD AS PDF</button>
       <br><br><br><br><br>

     </div>

     <!-- Second Column Ends -->

   </div>
 </div>
</div>

 <div class="container my-4 ">
   <hr style="border-color: mediumseagreen;">
   <div class="footer">
     <ul class="nav nav-pills nav-fill bg-success rounded">
       <li class="nav-item">
         <a href="{{route('dt')}}" class="nav-link text-white btn-outline-info"><i class="fab fa-connectdevelop"></i> Developers</a>
       </li>
       <li class="nav-item">
         <a href="{{route('ct')}}" class="nav-link text-white btn-outline-info"><i class="far fa-copyright"></i> Copyright</a>
       </li>
       <li class="nav-item">
         <a href="{{route('ppt')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-user-shield"></i>  Privacy Policy</a>
       </li>
       <li class="nav-item ">
         <a href="{{route('cot')}}" class="nav-link text-white btn-outline-info"><i class="fas fa-file-signature"></i>  Contact</a>
       </li>
     </ul><hr>
   </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
 <script src="/tableHTMLExport.js"></script>
 <script>
   $('#json').on('click',function(){
     $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
   })
   $('#csv').on('click',function(){
     $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
   })
   $('#pdf').on('click',function(){
     $("#example").tableHTMLExport({type:'pdf',filename:'sample.pdf'});
   })
   </script>




 </body>
 </html>
