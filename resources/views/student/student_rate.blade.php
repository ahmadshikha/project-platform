<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>courses</title>

    <link rel="stylesheet" href="/css/browse.css">
</head>

<body>
    <x-nav />
    <div class="">
        <div class="most-popular">
            <div class="row">
                @foreach ($student_rate as $st)
                    <div class="col-lg-3 col-sm-6">
                        <div class="item   " style="background-color: #2d282d">
                            <p style="font-size:20px ;text-align:center;color: white">  الدورة : {{ $st['course']->title }} </p>
                            <p style="font-size:20px ;text-align:center;color: white">المعدل : {{ $st['value'] }}  </p>
                            <p style="font-size:20px ;text-align:center;color: white">التاريخ : {{ $st['created_at'] }} </p>
                            <p style="font-size:20px ;text-align:center;color: white">الوضع : {{ $st['easy']==1?'تحديد مستوى' :"تحدي" }} </p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js.map"></script>
    <script src="/js/all.min.js"></script>



</body>

</html>
