<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quia?</h1>
        @php  $i = -2  ; @endphp
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
              </tr>
            </thead>
        @foreach ($filename as $file=>$value)
            @php    $i = $i+1 ;
                    $data = '' ;
            @endphp
                <tbody>
                  <tr>
                      @php
                      $data = $value
                      @endphp
                    <td scope="row">{{$i}}</td>
                    <td> <a href="/xcel/{{$data}}"> {{$value}}</a></td>
                    <td>

                    
                      {{-- {{$data}} --}}
                      <form action="{{ route('xcel.datashow')}}" method="POST">
                        {{ csrf_field() }}
                      <input type="hidden" value="{{$data}}" name="filename">
                      <button type="submit">เลือกไฟล์นี้</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

    </div>
      {{-- @php
          dd($value) ;    
      @endphp --}}
      
</div>
</body>
</html>