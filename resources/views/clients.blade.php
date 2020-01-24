<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($clients as $$c)
            <tr>
                <td>{{$c->Firstname}}</td>
                <td>{{$c->Lastname}}</td>
                <td>{{$c->user}}</td>
                <td>{{$c->pass}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>