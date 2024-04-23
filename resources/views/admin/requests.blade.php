<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Requests</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
     
    <x-sidebar/>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img src="/images/t3.png" class="rr rounded-5" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Requests</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Teacher Name </td>
                  <td>Course Name</td>
                  <td>Request Date</td>
                  <td>Action</td>
                
                </tr>
              </thead>
              @foreach ($teacherCourse as $te)
                
              <tbody>
                <tr>
                  <td>{{$te['teacher']->user_name}}</td>
                  <td>{{$te['course']->title}}</td>
                  <td>{{$te['created_at']}}</td>
                  
              
                  <td>
                    <a href="/adminTeacher/destroy/{{ $te['course_id']}}"><span class="label btn-shape bg-orange c-white">Pending</span></a>
                  </td>
                </tr>
             
              </tbody>
              @endforeach

            </table>
          </div>
        </div>
          <!-- End Plan -->
        </div>
      </div>
    </div>
  </body>
</html>
