<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>apellido</th>
                <th>correo</th>
                <th>create_at</th>

            </tr>
        </thead>
        <tbody>
            @foreach($listTUser as $value)
                <tr>
                    <td>{{$value->firstName}}</td>
                    <td>{{$value->surName}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->created_at}}</td>
                    <td class="text-right">
                        <button class="btn btn-xs btn-default" onclick="deleteCity('{{$value->idCity}}');">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>