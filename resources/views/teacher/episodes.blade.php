<x-nav />

<body style="background-color: #1e1c1c">
<link rel="stylesheet" href="/css/all.min.css">

    <div class="container-fluid ">
        <div class="most-popular  ">

            <table class="table  table-striped fs-5">
                @if(!isset($episode[0]['course_id']))
                no episode
                @else
                <div class="d-flex justify-content-end">

                <a href="/easy_question/{{$episode[0]['course_id']}}"><button class="btn btn-primary fs-4 rounded-pill ms-3">اسئلة بداية الدورة</button></a>
                <a href="/challenge_question/{{$episode[0]['course_id']}}"><button class="btn btn-primary fs-4 fa-delete rounded-pill">اسئلة نهاية الدورة </button></a>
                </div>
                <thead>
                    <tr>
                        <th scope="col"># </th>
                        <th scope="col"> title</th>
                        <th scope="col"> url</th>
                        <th scope="col">publish date </th>
                        <th scope="col">action </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach ($episode as $ep)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $ep['title'] }}</td>
                        <td><a href="{{ $ep['url'] }}">{{ $ep['url'] }}</a></td>
                        <td>{{ $ep['created_at'] }}</td>
                        <td>
                            <div class=" btn btn-danger rounded-pill " >
                                <a style="color:white" href="/episode/destroy/{{ $ep['id'].'/'.$ep['course_id'] }}">حذف</a>
                            </div>
                            <div class=" btn btn-warning  rounded-pill ">
                                <a style="color:black" href="/episode/edit/{{ $ep['id'] }}">تعديل</a>
                            </div>
                        </td>
                    </tr>
                    <?php $i++;?>
                    <?php $course_id=$ep['course_id']; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <script src="/js/all.min.js"></script>
</body>
