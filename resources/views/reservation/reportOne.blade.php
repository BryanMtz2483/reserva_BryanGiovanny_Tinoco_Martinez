<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Report</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Room Name</th>
            <th scope="col">Reservation date</th>
            <th scope="col">initial hour</th>
            <th scope="col">final hour</th>
            <th scope="col">client´s name</th>
            <th scope="col">reserved hours</th>
          </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row">{{$reservations->id}}</th>
                    <td>{{$reservations->nombre_sala}}</td>
                    <td>{{$reservations->fecha_reserva}}</td>
                    <td>{{$reservations->hora_inicio}}</td>
                    <td>{{$reservations->hora_fin}}</td>
                    <td>{{$reservations->nombre_cliente}}</td>
                    <td>{{$reservations->hora_inicio -$reservations->hora_fin}}</td>
                </tr>
        </tbody>
      </table>
</body>
</html>