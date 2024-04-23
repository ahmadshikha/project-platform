<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teacher</title>
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
            <img src="imgs/avatar.png" alt="" />
          </div>
        </div>
      <!-- End Head -->

      <div class="friends-page d-grid m-20 gap-20">
        @foreach ($teacher as $compact)
        <div class="friend bg-white rad-6 p-20  p-relative">
          <div class="contact">
            <i class="fa-solid fa-phone"></i>
            <i class="fa-regular fa-envelope"></i>
          </div>
          <div class="txt-c">
            <img class="rad-half mt-10 mb-10 w-50 h-50" src="/images/{{$compact['photo'] }}" width="150" height="150" />
            <h4 class="m-0">{{$compact['email']}}</h4>
            <p class="c-grey fs-10 mt-5 mb-0">{{$compact['competent']}}</p>
          </div>
          <div class="icons fs-14 p-relative">
            <div class="mb-10">
              <i class="fa-regular fa-face-smile fa-fw"></i>
              <span>{{$compact['user_name']}}</span>
            </div>
            <div class="mb-10">
              <i class="fa-solid fa-code-commit fa-fw"></i>
              <span>{{$compact['phone']}}</span>
            </div>
            <div>
              <?php $date = $compact['created_at'] ?>

              <i class="fa-regular fa-newspaper fa-fw"></i>
              <span>{{$compact['episode_num']}}</span>
            </div>
            <span class="vip fw-bold c-orange"></span>
          </div>
          <div class="info between-flex fs-13">
            <span class="c-grey">Joined {{date('Y-m',strtotime($date))}}</span>
            <div>
              <a class="bg-blue c-white btn-shape" href="teacher/edit/{{ $compact['id'] }}">Profile</a>
              <a class="bg-red c-white btn-shape" href="teacher/destroy/{{ $compact   ['id'] }}">Remove</a>
            </div>
          </div>
        </div>
        @endforeach



      </div>
    </div>
  </div>
  </div>
</body>

</html>