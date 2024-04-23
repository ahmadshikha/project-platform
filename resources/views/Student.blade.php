<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Students</title>
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
      <h1 class="p-relative">Students</h1>
      <div class="projects-page d-grid m-20 gap-20">
        @foreach($student as $st)
        <div class="project bg-white p-20 rad-6 p-relative">
        <?php $date = $st['created_at'] ?>

          <span class="date fs-13 c-grey">{{date('Y-m-d',strtotime($date))}}</span>
          <h4 class="m-0">{{$st['user_name']}}</h4>
          <p class="c-grey mt-10 mb-10 fs-14">{{$st['email']}}</p>
          <div class="team">
            <a href="#"><img src="/images/{{$st['photo']}} alt="" /></a>
          
          </div>
          <div class="do d-flex">
            <span class="fs-13 rad-6 bg-eee">Programming</span>
            <span class="fs-13 rad-6 bg-eee">Design</span>
            <span class="fs-13 rad-6 bg-eee">Hosting</span>
            <span class="fs-13 rad-6 bg-eee">Marketing</span>
          </div>
          <div class="info between-flex">
            <div class="prog bg-eee">
              <span class="bg-red" style="width: 80%"></span>
            </div>
            <div class="fs-20 c-grey">
            <a class="bg-blue c-white btn-shape" href="student/destroy/{{ $st['id'] }}">Drop</a>
           
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</body>

</html>