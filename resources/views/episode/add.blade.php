<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame h-auto">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">add episode</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="/episode" method="post" enctype="multipart/form-data">
                @csrf

                <label for="title">title</label>
                <input class="form-styling" type="text" name="title" placeholder="" />
                <label for="url">url </label> <input class="form-styling" type="url"
                    name="url" placeholder="" />
                    <label for="course_id">course</label>
                        <select name="course_id" class="form-styling" id="">
                            @foreach ($course as $co)
                                <option value="{{$co['id']}}">{{$co['title']}}</option>
                            @endforeach
                        </select>
                <br>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="ADD">
                <br>
                <br>

            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
