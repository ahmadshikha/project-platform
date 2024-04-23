<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/sign_up.css">
<div class="container" style="direction: rtl">
    <div class="frame" style="height: auto">
        <div class="nav d-flex justify-content-center">
            <ul class="links ">
                <li class="signin-active "><a class="btn fs-3">تعديل أسئلة نهاية الدورة</a></li>
            </ul>
        </div>
        <div ng-app ng-init="checked = false">
            <form class=" p-3" action="/challenge_question/update/{{$edit['id']}}/{{$edit['course_id']}}" method="post" enctype="multipart/form-data">
                @csrf



                    <label for="question" style="color:rgb(229, 229, 229) ;font-size: 20px">السؤال   </label>
                    <input class="form-styling" type="text" name="question" value={{$edit['question']}} />
                    <label for="answer">الجواب</label>
                    <input class="form-styling" type="text" name="answer"  value={{$edit['answer']}} />
                    <label for="option1">خيار آخر </label>
                    <input class="form-styling" type="text" name="option1" value={{$edit['option1']}}  />
                    <label for="option2">خيار آخر</label>
                    <input class="form-styling" type="text" name="option2" value={{$edit['option2']}}  />



                <br>
                <div class="d-flex justify-content-center">
                <input type="submit" style="background-color: rgb(247, 171, 30) " class=" btn-signup w-50  " value="update">
            </div>


            </form>

            <script src="/js/bootstrap.bundle.min.js"></script>
            <script src="/js/all.min.js"></script>
