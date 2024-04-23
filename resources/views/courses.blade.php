<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
    <x-sidebar />

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
            <img src="/images/t3.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Courses</h1>
        <div class="courses-page d-grid m-20 gap-20">
          @foreach ($course   as  $cour )
            
          <div class="course bg-white rad-6 p-relative">
            <img class="cover" src="/images/{{$cour['photo']}}" alt="" />
            <img class="instructor" src="/images/team-01.png" alt="" />
            <div class="p-20">
              <h4 class="m-0">{{$cour['title']}}</h4>
              <p class="description c-grey mt-15 fs-14">
              {{$cour['description']}}
              </p>
            </div>
            <div class="info p-15 p-relative between-flex">
              <a href="/course/destroy/{{$cour['id']}}"><span class="title bg-blue c-white btn-shape">Drop Course</span></a>
              
              <span class="c-grey"> Count Episod The Course ::  {{$cour['episode_num']}}</span>
             
            </div>
          </div>
          @endforeach

        
       
        </div>
      </div>
    </div>
  </body>
</html>
