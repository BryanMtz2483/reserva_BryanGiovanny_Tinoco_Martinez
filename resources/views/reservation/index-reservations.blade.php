<x-app-layout>
    <style>
        .tabla-productos:hover{
            background-color: lightyellow;
        }
    </style>
    <br><br><br><br>
    <br>
    <div>
    </div>
    <div class=" relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre de la Sala
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de la reserva
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora_inicio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora_Fin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre del cliente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
    @foreach($reservations as $reservation)
        <tr class="tabla-productos border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$reservation -> id}} 
            </th>
            <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="{{route('reservation.show',$reservation->id)}}">{{$reservation -> nombre_sala}} </a>
            </th>
            <td class="px-6 py-4">
                {{$reservation -> fecha_reserva}}
            </td>
            <td class="px-6 py-4">
                {{$reservation -> hora_inicio}}
            </td>
            <td class="px-6 py-4">
                {{$reservation -> hora_fin}}
            </td>
            <td class="px-6 py-4">
                {{$reservation -> nombre_cliente}}
            </td>
            <td class="px-6 py-4">
                <a href="{{route('reservation.update', $reservation -> id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
{{$reservations->links()}}

</x-app-layout>