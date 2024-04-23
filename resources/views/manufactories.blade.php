<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>ML store</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/browse.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/animate.css">


</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <x-nav />
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="most-popular">


            <div class="row">
                @foreach ($manufactory as $ma)
                        <div class="col-lg-3 col-sm-6">
                            <div class="item bg-dark  " >

                                <p style="font-size:20px ;text-align:center;color: white"> {{ $ma['name'] }}</p>

                                <hr>
                                <div class="d-flex  align-items-center justify-content-evenly mt-1">
                                    <a href="Manufactory/destroy/{{ $ma['id'] }}"
                                        class="card-button btn-danger  p-1 ps-4 pe-2 rounded-pill">
                                        delete</a>
                                    <a href="Manufactory/edit/{{ $ma['id'] }}"
                                        class="card-button btn-warning p-1 ps-4 pe-2 rounded-pill">
                                        update</a>
                                </div>
                            </div>
                        </div>

                @endforeach

            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2023 <a href="#">ML store</a> Company. All rights reserved.

                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js.map"></script>
    <script src="/js/all.min.js"></script>



</body>

</html>
