<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add student</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="/student" method="post" enctype="multipart/form-data">
                @csrf

                <label for="user_name">user_name</label>
                <input class="form-styling" type="text" name="user_name" placeholder="" />
                <label for="password">password </label> <input class="form-styling" type="password" name="password"
                    placeholder="" />
                <label for="email">email</label> <input class="form-styling" type="email" name="email"
                    placeholder="" />
                <label for="phone">phone_number</label> <input class="form-styling" type="number" name="phone"
                    placeholder="" />
                <label for="photo">
                    <div> photo</div>
                </label> <input class="" type="file" name="photo" placeholder="" />
                <br>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="sign up">
                <br>
                <br>


                <div class="" style="color:white;text-align:center;margin-top:30px"> or <a
                        href="login">login</a> </div>


            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
