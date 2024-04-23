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
                @foreach ($student as $st)
                        <div class="col-lg-3 col-sm-6">
                            <div class="item   " style="background-color: #a10ca1" >

                                <p style="font-size:20px ;text-align:center;color: white"> {{ $st['user_name'] }}</p>
                                <p style="font-size:20px ;text-align:center;color: white"> {{ $st['phone'] }}</p>

                                <hr>
                                <div class="d-flex  align-items-center justify-content-evenly mt-1">
                                    <a href="student/destroy/{{ $st['id'] }}"
                                        class="card-button btn-primary  p-1 ps-4 pe-4 rounded-pill">
                                        حذف</a>
                                    <a href="student/edit/{{ $st['id'] }}"
                                        class="card-button btn-primary p-1 ps-4 pe-4 rounded-pill">
                                        تعديل</a>
                                </div>
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
