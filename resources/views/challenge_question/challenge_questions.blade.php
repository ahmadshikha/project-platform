<x-nav />

<body style="background-color: #1e1c1c">


    <div class="container-fluid ">
        <div class="most-popular  ">

            <table class="table  table-striped fs-5">

                <thead>
                    <tr>

                        <th scope="col"> question</th>
                        <th scope="col"> answer</th>
                        <th scope="col">option1 </th>
                        <th scope="col">option2 </th>
                        <th scope="col">action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($easy as $ea)
                    <tr>
                        <td>{{ $ea['question'] }}</td>
                        <td>{{ $ea['answer'] }}</td>
                        <td>{{ $ea['option1'] }}</td>
                        <td>{{ $ea['option2'] }}</td>
                        <td>
                            <div class=" btn btn-warning  rounded-pill ">
                                <a href="/challenge_question/edit/{{ $ea['id'] }}" style="color: black">تعديل</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
