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
          </tr>
        </thead>
        <tbody>
            @foreach ( $reservations as $reservation )
                <tr>
                    <th scope="row">{{$reservation->id}}</th>
                    <td>{{$reservation->nombre_sala}}</td>
                    <td>{{$reservation->fecha_reserva}}</td>
                    <td>{{$reservation->hora_inicio}}</td>
                    <td>{{$reservation->hora_fin}}</td>
                    <td>{{$reservation->nombre_cliente}}</td>
                </tr>
            @endforeach 
        </tbody>
      </table>
</body>
</html>