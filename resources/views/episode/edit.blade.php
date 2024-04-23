<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">Edit episode</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">

            <form class="form-signin" action="/episode/update/{{$edit['id']}}" method="post" enctype="multipart/form-data">
                @csrf

                <label for="title">title</label>
                <input class="form-styling" type="text" name="title" value="{{$edit['title']}}" />
                <label for="url">url </label> <input class="form-styling" type="url"
                    name="url" value="{{$edit['url']}}" />
                    <label for="course_id">course</label>
                        <select name="course_id" class="form-styling" id="">
                            @foreach ($course as $co)
                                <option value="{{$co['id']}}" {{$edit['course_id']==$co['id']?'selected':''}}>{{$co['title']}}</option>
                            @endforeach
                        </select>
                <br>
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup " value="Eidt">
                <br>
                <br>

            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
