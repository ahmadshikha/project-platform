<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container" style="direction: rtl">
    <div class="frame" style="min-width:100% ;height: auto">
        <div class="nav d-flex justify-content-center">
            <ul class="links ">
                <li class="signin-active "><a class="btn fs-3">اضافة أسئلة بداية الدورة</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class=" p-3" action="/easy_question" method="post" enctype="multipart/form-data">
                @csrf
                <label for="course_id" class="fs-3">الدورة</label>
                    <select name="course_id" class="form-styling" id="">
                        <?php $test=true; ?>
                        @foreach ($course as $co)
                            <option value="{{$co['id']}}">{{$co['title']}}</option>
                        @endforeach
                    </select>
                    <div class="raw d-flex flex-wrap">
                    @for ($i=0;$i<10;$i=$i+1)
                    <div class="col-lg-4 w-30 p-3">
                    <label for="question" style="color:rgb(229, 229, 229) ;font-size: 20px">السؤال  {{$i+1}} </label>
                    <input class="form-styling" type="text" name="question{{$i}}"  />
                    <label for="answer">الجواب</label>
                    <input class="form-styling" type="text" name="answer{{$i}}"  />
                    <label for="option1">خيار آخر </label>
                    <input class="form-styling" type="text" name="option1{{$i}}"  />
                    <label for="option2">خيار آخر</label>
                    <input class="form-styling" type="text" name="option2{{$i}}"  />
                    </div>
                    @endfor
                    </div>
                <br>
                <div class="d-flex justify-content-center">
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup w-50" value="ADD">
            </div>


            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
