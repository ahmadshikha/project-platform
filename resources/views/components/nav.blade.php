<link rel="stylesheet" href="/css/browse.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<!-- 
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <ul class="nav">
                        @if(Auth::guard('teacher')->user()!=null)
                        <li><a href="/course">الصفحة الرئيسية</a></li>
                        <li><a href="/add_course">اضافة كورس</a></li>
                        <li><a href="/episode/create">اضافة حلقة</a></li>
                        <li><a href="/easy_question/create">اضافة اسئلة سهلة</a></li>
                        <li><a href="/challenge_question/create">اضافة اسئلة تحدي</a></li>
                        @elseif (Auth::guard('student')->user() != null)
                        <li><a href="/course">الصفحة الرئيسية</a></li>
                        <li><a href="/student_rate">معدلاتي</a></li>
                        @else
                        <li><a href="/teacher">الاساتذة</a></li>
                        <li><a href="/add_teacher">اضافة استاذ</a></li>
                        <li><a href="/student">الطلاب</a></li>
                        <li><a href="/adminTeacher" >الطلبات</a></li>
                        @endif
                        <li><a href="/account/logout" style="color:white ;font-size:20px">تسجيل الخروج</a></li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</header>



 -->

@if(Auth::guard('teacher')->user()!=null)
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style/style.css">
    <link rel="stylesheet" href="/scripts/bootstrap.min.js">
    <link rel="stylesheet" href="/css/style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <nav class="navbar fixed-top w-100% navbar-dark bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">

            <a href="/account/logout" class="btn btn-outline-dark">
                Logout
                <span class="material-symbols-outlined">
                    logout
                </span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0  " width=30px>
                    <li class="nav-item">
                        <a href="/course" class="btn btn-outline-dark  m-1">
                            Home Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/add_course" class="btn btn-outline-dark m-1">
                            Add Course
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/episode/create" class="btn btn-outline-dark  m-1">
                            Add Episod
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/easy_question/create" class="btn btn-outline-dark  m-1">
                            Add Easy Question
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/challenge_question/create" class="btn btn-outline-dark  m-1">
                            Add Hard Question
                        </a>
                    </li>
                </ul>

            </div>
            <!-- <img src="images/photo_٢٠٢٣-٠٩-٠٦_١٣-١١-٣٠.jpg" width="50" height="50"  class="rounded-5"> -->
        </div>
    </nav>
    <script src="js/scripts/bootstrap.bundle.min.js"></script>
</body>

</html>

@elseif (Auth::guard('student')->user() != null)





@else


@endif