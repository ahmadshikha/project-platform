<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Courses</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/browse.css">
    <link rel="stylesheet" href="/css/owl.css">
    <link rel="stylesheet" href="/css/animate.css">


</head>

<body>
    <x-nav />


    <div class="container">
        <div class="most-popular">

            @if (isset(Auth::guard('student')->user()))
                <div class="search-input" class="bg-white">

                    <form id="search" action="{{ route('Labtop.index') }}">
                        <input type="text" placeholder="search" id='searchText' name="searchKeyWord"
                            onkeypress="handle" />
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            @endif
            <div class="row">

                <div class="page-content">


                    <div class="row">
                        @if (isset($_SESSION['trader_id']))

                            @foreach ($shop as $s)
                                @if ($s['trader_id'] == $_SESSION['trader_id'])
                                    @foreach ($labtop as $l)
                                        @if ($l['shop_id'] == $s['id'])
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="item d-flex  align-items-center justify-content-evenly flex-column">

                                                    <img src="/images/{{ $l['photo'] }}" height="170"
                                                        width="230">


                                                    <h4>{{ $l['name'] }}<br><span>
                                                            @foreach ($manufactory as $m)
                                                                @if ($m['id'] == $l['manufactory_id'])
                                                                    {{ $m['name'] }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                        <span>
                                                            @foreach ($category as $c)
                                                                @if ($c['id'] == $l['category_id'])
                                                                    {{ $c['name'] }}
                                                                @endif
                                                            @endforeach
                                                        </span>
                                                    </h4>

                                                    <div class="d-flex  align-items-center justify-content-evenly mt-1">
                                                        <a href="Labtop/destroy/{{ $l['id'] }}"
                                                            class="card-button btn-danger  p-1 ps-4 pe-4 m-1 mt-2 rounded-pill">
                                                            delete</a>
                                                        <a href="Labtop/edit/{{ $l['id'] }}"
                                                            class="card-button btn-warning p-1 ps-4 pe-4 rounded-pill">
                                                            update</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @elseif (isset($_GET['searchKeyWord']))
                            @foreach ($labtop as $l)
                                @if ($l['name'] == $_GET['searchKeyWord'])
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="labtop/buy/{{ $l['id'] }}" class="d-inline-block">
                                            <div class="item d-flex  align-items-center justify-content-evenly flex-column">
                                                <div style="max-height=150 ">
                                                    <img src="/images/{{ $l['photo'] }}" height="170"
                                                        width="230">

                                                </div>
                                                <h4>{{ $l['name'] }}<br><span>
                                                        @foreach ($manufactory as $m)
                                                            @if ($m['id'] == $l['manufactory_id'])
                                                                {{ $m['name'] }}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                    <span>
                                                        @foreach ($category as $c)
                                                            @if ($c['id'] == $l['category_id'])
                                                                {{ $c['name'] }}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </h4>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @elseif (isset($_GET['id']) == true && $_GET['id'] != 0)
                            @foreach ($labtop as $l)
                                @if ($l['manufactory_id'] == $_GET['id'])
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="labtop/buy/{{ $l['id'] }}" class="d-inline-block">
                                            <div class="item">
                                                <div style="max-height=150 ">
                                                    <img src="/images/{{ $l['photo'] }}" height="170"
                                                        width="230">

                                                </div>
                                                <h4>{{ $l['name'] }}<br><span>
                                                        @foreach ($manufactory as $m)
                                                            @if ($m['id'] == $l['manufactory_id'])
                                                                {{ $m['name'] }}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                    <span>
                                                        @foreach ($category as $c)
                                                            @if ($c['id'] == $l['category_id'])
                                                                {{ $c['name'] }}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </h4>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            @foreach ($labtop as $l)
                                <div class="col-lg-3 col-sm-6">
                                    <a href="labtop/buy/{{ $l['id'] }}" class="d-inline-block">
                                        <div class="item d-flex  align-items-center justify-content-evenly flex-column">
                                            <div style="max-height=150 ">
                                                <img src="/images/{{ $l['photo'] }}" height="170" width="230">

                                            </div>
                                            <h4>{{ $l['name'] }}<br><span>
                                                    @foreach ($manufactory as $m)
                                                        @if ($m['id'] == $l['manufactory_id'])
                                                            {{ $m['name'] }}
                                                        @endif
                                                    @endforeach
                                                </span>
                                                <span>
                                                    @foreach ($category as $c)
                                                        @if ($c['id'] == $l['category_id'])
                                                            {{ $c['name'] }}
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </h4>
                                            @if (isset($_SESSION['admin']))
                                                <div class="d-flex  align-items-center justify-content-evenly mt-1">
                                                    <a href="Labtop/destroy/{{ $l['id'] }}"
                                                        class="card-button btn-danger  p-1 ps-4 pe-2 rounded-pill">
                                                        delete</a>

                                                </div>
                                            @endif
                                    </a>
                                </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
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
