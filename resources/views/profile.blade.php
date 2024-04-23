<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
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
      <h1 class="p-relative">Profile</h1>
      <div class="profile-page m-20">
        <!-- Start Overview -->
    @foreach($admin as $admine)

        <div class="overview bg-white rad-10 d-flex align-center">
          <div class="avatar-box txt-c p-20">
            <img class="rad-half mb-10" src="images/avatar.png" alt="" />
            <h3 class="m-0">{{$admine['user_name']}}</h3>
            <p class="c-grey mt-10"></p>
            <div class="level rad-6 bg-eee p-relative">
              <span style="width: 70%"></span>
            </div>
            <div class="rating mt-10 mb-10">
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
              <i class="fa-solid fa-star c-orange fs-13"></i>
            </div>
            <p class="c-grey m-0 fs-13"></p>
          </div>
          <div class="info-box w-full txt-c-mobile">
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey fs-15 m-0 w-full">General Information</h4>
              <div class="fs-14">
                <span class="c-grey">Full Name</span>
                <span>{{$admine['fullname']}}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Gender:</span>
                <span>{{$admine['gender']}}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Country:</span>
                <span>{{$admine['country']}}</span>
              </div>
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            @endforeach
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Personal Information</h4>
              <div class="fs-14">
                <span class="c-grey">Email:</span>
                <span>{{$admine['email']}}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Phone:</span>
                <span>{{$admine['phone']}}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Date Of Birth:</span>
                <span>25/1/2004</span>
              </div>
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Job Information</h4>
              <div class="fs-14">
                <span class="c-grey">Title:</span>
                <span>{{$admine['job']}}</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Programming Language:</span>
                <span>Php laravel</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Years Of Experience:</span>
                <span> +2</span>
              </div>
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <!-- End Information Row -->
            <!-- Start Information Row -->
            <div class="box p-20 d-flex align-center">
              <h4 class="c-grey w-full fs-15 m-0">Billing Information</h4>
              <div class="fs-14">
                <span class="c-grey">Payment Method:</span>
                <span>Paypal</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Email:</span>
                <span>email@website.com</span>
              </div>
              <div class="fs-14">
                <span class="c-grey">Subscription:</span>
                <span>Monthly</span>
              </div>
              <div class="fs-14">
                <label>
                  <input class="toggle-checkbox" type="checkbox" />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <!-- End Information Row -->
          </div>
        </div>
        <!-- End Overview -->
        <!-- Start Other Data -->

        <!-- End Other Data -->
      </div>
    </div>
  </div>
</body>

</html>