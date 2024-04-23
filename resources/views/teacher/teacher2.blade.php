
<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teachers</title>
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/framework.css" />
  <link rel="stylesheet" href="css/master.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>

<body dir="ltr">
  <x-nav />
  <x-sidebar />
  <div class="page">
  
    <div class="content w-50 justify-content-evenly ">

      
        <di class="friends-page  d-grid  m-20 gap-20">
        
          @foreach ($teacher as $compact)

          <div class="friend w-200 bg-white rad-6 p-20 p-relative">
            <div class="contact">
              <i class="fa-solid fa-phone"></i>
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div class="txt-c">

              <img class="rad-half mt-10 mb-10 w-100 h-100" src="/images/{{$compact['photo'] }}" width="10" height="10">
              <p class="c-grey fs-13 mt-5 mb-0">{{$compact['email']}}</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>{{$compact['user_name']}}</span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>{{$compact['competent']}}</span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>{{$compact['phone']}} </span>
              </div>
              <span class="vip fw-bold c-orange"></span>
            </div>
            <div class="info between-flex  fs-13">
              <span class="c-grey">Joined {{$compact['created_at']}}</span>
              <div class="d-flex justify-align-content">
                <a class="bg-blue  c-white btn-shape d-inline m-2" href="teacher/edit/{{ $compact['id'] }}">Profile</a>
                <a class="bg-red c-white btn-shape d-inline" href="teacher/destroy/{{ $compact   ['id'] }}"">Remove</a>
                
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    </div>
  </body>
</html>