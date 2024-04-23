<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>courses</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/all.min.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css.map" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/home.css">

    <!-- new style -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/all.min.css" />
    <link rel="stylesheet" href="/css/framework.css" />
    <link rel="stylesheet" href="/css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav justify-content-end">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <a href="sign_up_student" class="btn btn-primary   rounded-pill fs-5 ">sign up</a>
                            <a class="btn btn-primary rounded-pill fs-5 me-3" href="{{url('login2')}}">login</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h5 >مرحبا بك في منصة كورسس </h5>
                                    <h4><em>للتعلم والفائدة</em> </h4>
                                    <div class="main-button">
                                        <a href="sign_up_student "> sign up</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->
                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4>اهم  الدورات الموجودة لدينا</h4>
                                </div>
                                <div class="row">
                                    <?php $counter = 0; ?>
                                    @foreach ($course as $c)
                                        <?php if ($counter > 8) {
                                            break;
                                        } ?>
                                         <div class="col-lg-3 col-sm-6 ">
                                             <div class="item">
                                                
                                                <img src="/images/{{ $c['photo'] }}" width="300" height="150">
                                                <h4> <span style="color:#043bd1"> {{ $c['title'] }}</span><br>
                                                        {{ $c['description'] }}</h4>
                                                        

                                            </div> 
                                        </div> 
                                        <?php $counter = $counter + 1; ?>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <!-- ***** Most Popular End ***** -->
                        <div class="start-stream">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>لماذا علي ان احضر دورات هذه المنصة</em> </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <h3>سهولة الوصول </h3><br>يمكنك الحصول على حلقات الدورة فقط بضغطة زر على ايقونة الدورة</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <h3>التقييم</h3><br>
                                            <p>يمكنك معرفة مستواك اذا أن هناك اسئلة تحديد مستوى قبل أن تبدأ الدورة  </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="item">
                                            <h3 >التحدي</h3><br>
                                            <p>بعد انتهائك من الدورة يمكن ان تجيب على اسئلة التحدي التي وضعت من قبل مقدم الدورة </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="sign_up">sign up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="/js/all.min.js"></script>
                        <script src="/js/bootstrap.bundle.min.js"></script>

</body>

</html>

