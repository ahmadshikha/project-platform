

<x-nav />
<body style="background-color: #1e1c1c">


  <div class="container-fluid ">
      <div class="most-popular  ">

<table class="table table-dark table-striped fs-5">    <thead>
      <tr>


        <th scope="col">labtop </th>
        <th scope="col"> mobile</th>
        <th scope="col"> shop</th>

        <th scope="col">date </th>
        <th scope="col">action  </th>



      </tr>
    </thead>
    <tbody>
      @foreach ($invoice as  $in)
        @if ($_SESSION['customer_id']==$in['customer_id'])
        @if ($in['product_type_id']==1)
          @foreach ($labtop as $la )
            @if ($la['id']==$in['labtop_id'])
              <td>{{$la['name']}}</td>
              <td></td>
            @endif
          @endforeach
          @else

          @foreach ($mobile as $mo )
            @if ($mo['id']==$in['mobile_id'])
            <td></td>
              <td>{{$mo['name']}}</td>
            @endif
          @endforeach
          @endif
          @foreach ($shop as $sh )
            @if ($sh['id']==$in['shop_id'])

              <td>{{$sh['name']}}</td>
            @endif
          @endforeach
          <td>
            {{$in['date']}}
          </td>
          <td >
            <div class=" btn btn-danger  rounded-pill "  >
              <a href="/Invoice/destroy/{{$in['id']}}" >delete</a>
            </div>
          </td>
          </tr>
        @endif
      @endforeach
    </tbody>
</table>
</div>
</body>
