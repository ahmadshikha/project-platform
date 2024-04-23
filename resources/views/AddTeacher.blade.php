<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add_Teacher</title>
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
      <h1 class="p-relative">Add Teacher</h1>
      <div class="settings-page m-20 d-grid gap-20">
        <!-- Start Settings Box -->

        <!-- End Settings Box -->
        <!-- Start Settings Box -->
        <form action="/teacher" method="post" enctype="multipart/form-data">


          @csrf
          <div class="p-20 bg-white rad-10 text-center">
            <h2 class="mt-0 mb-10">General Info</h2>
            <p class="mt-0 mb-20 c-grey fs-15">General Information About Your Account</p>

            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="user_name">Name</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" type="text" name="user_name" placeholder="First_Name" autocomplete="off">
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="password">password</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="password" type="password" id="password" placeholder="password" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="email">Email</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="email" type="email" id="email" placeholder="email" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="phone">phone</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="phone" type="text" id="phone" placeholder="emaphoneil" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="country">country</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="country" type="text" id="country" placeholder="country" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="competent">competent</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="competent" type="text" id="competent" placeholder="competent" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="job">job</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="job" type="text" id="job" placeholder="job" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="gender">gender</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="gender" type="text" id="gender" placeholder="gender" />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="experince">experince</label>
              <input class="b-none border-ccc p-10 rad-6 d-block w-full" name="experince" type="text" id="experince" placeholder="experince" />
            </div>
            <div class="mb-15">
              <label for="photo">
                <div> </div>
              </label> <input class="" type="file" name="photo" placeholder="" />
            </div>

            <div>

              <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="Add teacher" width="30">

            </div>
          </div>

        </form>


        <div class="social-boxes p-20 bg-white rad-10">
          <h2 class="mt-0 mb-10">Social Info</h2>
          <p class="mt-0 mb-20 c-grey fs-15">Social Media Information</p>
          <div class="d-flex align-center mb-15">
            <i class="fa-brands fa-twitter center-flex c-grey"></i>
            <input class="w-full" type="text" placeholder="Twitter Username" />
          </div>
          <div class="d-flex align-center mb-15">
            <i class="fa-brands fa-facebook-f center-flex c-grey"></i>
            <input class="w-full" type="text" placeholder="Facebook Username" />
          </div>
          <div class="d-flex align-center mb-15">
            <i class="fa-brands fa-linkedin center-flex c-grey"></i>
            <input class="w-full" type="text" placeholder="Linkedin Username" />
          </div>
          <div class="d-flex align-center">
            <i class="fa-brands fa-youtube center-flex c-grey"></i>
            <input class="w-full" type="text" placeholder="Youtube Username" />
          </div>
        </div>


        <!-- End Settings Box -->
      </div>
    </div>
  </div>
</body>

</html>