<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Reservas</title>
</head>
<body>
    <style>
        .btnav{
            background-color: darkblue;
            color: white;
            border-radius: 20px;
            width: 120px;
            height: 40px;
            align-items: center;
            text-align: center;
            font-style: italic;
            font-size: 1.5rem;
        }
        .btnav:hover{
            color: yellow;
        }
        #navegacion{
                background-image: url("https://imgs.search.brave.com/kWVZpvC332vzaTwj7DnhbmMi5R2F6uHZCeHaK0oP4DM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzE0NDcxMy9y/YXcvYTQwM2NiYzJj/MzZlNmNkMzJkN2E1/YmQwZGMxM2FkNzkt/YmVlci10ZXh0dXJl/LWJhY2tncm91bmQu/anBn");
                height: 110px;
        }
        .pointer{
            cursor: url('http://www.rw-designer.com/cursor-extern.php?id=126652') auto;
        }
        .logo{
            height: 15%;
            width: 30%;
        }
    </style>
<nav id="navegacion" class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('reservation.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://bluewebsites.s3.us-west-2.amazonaws.com/Clubmodelorama/Home/logoModelorama.png" class="logo h-8" alt="Flowbite Logo">
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="{{route('reservation.index')}}" type="button" class="btnav" aria-current="page">Home</a>
            <a href="{{route('reservation.create')}}" type="button" class="btnav"aria-current="page">Add</a>
            <a href="{{route('reservation.report')}}" type="button" class="btnav"aria-current="page">Storage</a>
        </li>
        <li>
        </ul>
    </div>
    </div>
</nav>
    {{$slot}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>