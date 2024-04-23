<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">edit teacher</a></li>

            </ul>
            <label for="photo"><img src="/images/{{ $edit['photo'] }}" class="img-fluid rounded-pill " width="200"
                height="200" /></label>
        </div>
        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="/student/update/{{ $edit['id'] }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo" id="photo" class="d-none" />
                <label for="user_name">user_name</label>
                <input class="form-styling" type="text" name="user_name" value={{ $edit['user_name'] }} />
                <label for="password">password </label> <input class="form-styling" type="password" name="password"
                />
                <label for="email">email</label> <input class="form-styling" type="email" name="email"
                    value={{ $edit['email'] }} />
                <label for="phone">phone_number</label> <input class="form-styling" type="number" name="phone"
                    value={{ $edit['phone'] }} />
                <br>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="update">
                <br>
                <br>





            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
