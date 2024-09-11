<x-app-layout>
    <style>
        .contenedor-todo{
            display: flex;
            align-items: center;
            margin-left: 500px;
            width: 500px;
            height: 1150px;
        }
    </style>

<div class="contenedor-todo max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <a href="#">
            <img class="rounded-t-lg" src="" alt="" />
        </a>
        <a href="#">
            <h3 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">{{$reservationDetail -> nombre_sala}}</h3>
        </a>
        <br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Id of Reservation: {{$reservationDetail->id}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Reservation date: {{$reservationDetail->fecha_reserva}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Initial hour: {{$reservationDetail->hora_inicio}}</p> <br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Final_hour: {{$reservationDetail->hora_fin}}</p><br>
        <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Client´s name: {{$reservationDetail->nombre_cliente}}</p><br>
        
        <a href="{{route('reservation.update', $reservationDetail->id)}}" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Actualizar 
        </a>
        <form action="{{route('reservation.delete',$reservationDetail->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Eliminar</button>
        </form>
        <a href="{{route('reservation.reportOne', $reservationDetail->id)}}" type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Obtener Reporte 
        </a>
    </div>
</div>


</x-app-layout>