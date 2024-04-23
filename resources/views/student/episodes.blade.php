<x-nav />

<body style="background-color: #1e1c1c">


    <div class="container-fluid ">
        <div class="most-popular  ">

            <table class="table  table-striped fs-5">
                @if(!isset($episode[0]['course_id']))
                لا يوجد حلقات
                @else
                <?php $exist_easy=false;
                $exist_challenge=false;
                foreach ($student_rate as $s) {
                    if($s['course_id']==$episode[0]['course_id']&&$s['easy']==1)
                    $exist_easy=true;
                    if($s['course_id']==$episode[0]['course_id']&&$s['easy']==0)
                    $exist_challenge=true;
                }
                ?>
                <div class="d-flex justify-content-end">
                    @if (!$exist_easy)
                    <a href="/easy_question/{{$episode[0]['course_id']}}"><button class="btn btn-primary fs-4 rounded-pill ms-3">اسئلة بداية الدورة</button></a>
                    @endif
                    @if (!$exist_challenge)
                    <a href="/challenge_question/{{$episode[0]['course_id']}}"><button class="btn btn-primary fs-4 rounded-pill">اسئلة نهاية الدورة </button></a>
                    @endif
                </div>
                <thead>
                    <tr>
                        <th scope="col">رقم الحلقة </th>
                        <th scope="col"> العنون</th>
                        <th scope="col"> رابط الحلقة</th>
                        <th scope="col">تاريخ النشر </th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>

                    @foreach ($episode as $ep)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $ep['title'] }}</td>
                        <td><a href="{{ $ep['url'] }}">{{ $ep['url'] }}</a></td>
                        <td>{{ $ep['created_at'] }}</td>

                    </tr>

                    <?php $course_id=$ep['course_id']; $i++?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</body>
