<x-nav />

<body style="background-color: #1e1c1c;direction:rtl">


    <div class="container-fluid ">
        <div class="most-popular  ">

            <table class="table  table-striped fs-5">

                <thead>
                    <tr>

                        <th scope="col"> السؤال</th>
                        <th scope="col">خيار 1 </th>
                        <th scope="col">خيار 2 </th>
                        <th scope="col"> خيار 3</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i=0;?>
                    <form action="/student_rate?course_id={{$easy[0]->course->id}}&&easy=1" method="POST">
                        @csrf

                    @foreach ($easy as $ea)
                    <tr>
                        <td>{{ $ea['question'] }}</td>
                        <td> <input type="radio" name="option{{$i}}" value="{{ $ea['answer'] }}" required> {{ $ea['answer'] }}</td>
                        <td> <input type="radio" name="option{{$i}}" value="{{ $ea['option1'] }}" required> {{ $ea['option1'] }}</td>
                        <td> <input type="radio" name="option{{$i}}" value="{{ $ea['option2'] }}" required > {{ $ea['option2'] }}</td>
                        <td class="d-none">{{$i++}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="submit" value="send" class="btn-primary  fs-4 p-2 rounded-pill">
        </form>
        </div>
    </div>
</body>
