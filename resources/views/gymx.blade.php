<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('GyMx') }}
        </h2>
    </x-slot>

    <style>
        /* Fondo de la página */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('{{ asset('imagenes/fondo.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        /* Contenedor principal */
        .dashboard-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            padding: 20px;
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        /* Encabezado */
        h2 {
            color: gold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
            -webkit-text-stroke: 0.4px black;
        }

        /* Texto descriptivo */
        .dashboard-content {
            font-size: 18px;
            line-height: 1.8;
            color: black;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
            margin-top: 15px;
        }

        /* Botones */
        .dashboard-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .dashboard-button {
            padding: 10px 20px;
            border-radius: 10px;
            background-color: #FF9800;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .dashboard-button:hover {
            background-color: #F57C00;
        }

        .dashboard-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Nuestros Productos GyMx.") }}
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("En GyMx contamos con una variedad de productos para poder entrenar en el gimnacio como es debido, desde playeras o outfits completos, hasta accesorios modernos 
                        los cuales te ayudaran a verte y sentirte bien en tus entrenamientos de pesas") }}
                </div>
                <!-- Sección principal -->
    
    <!-- Sección principal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contenedor de imágenes alineadas horizontalmente -->
            <div class="flex justify-center items-center">
                <!-- Imagen 1 -->
                <div class="flex justify-center items-center w-40 h-40 bg-gray-200 border border-gray-400 rounded-lg shadow-md m-2">
                    <img src="/imagenes/army.png" alt="Imagen 1" class="w-10 h-10 object-cover">
                </div>

                <!-- Imagen 2 -->
                <div class="flex justify-center items-center w-40 h-40 bg-gray-200 border border-gray-400 rounded-lg shadow-md m-2">
                    <img src="/imagenes/black.png" alt="Imagen 2" class="w-10 h-10 object-cover">
                </div>

                <!-- Imagen 3 -->
                <div class="flex justify-center items-center w-40 h-40 bg-gray-200 border border-gray-400 rounded-lg shadow-md m-2">
                    <img src="/imagenes/brown.png" alt="Imagen 3" class="w-10 h-10 object-cover">
                </div>

                <!-- Imagen 4 -->
                <div class="flex justify-center items-center w-40 h-40 bg-gray-200 border border-gray-400 rounded-lg shadow-md m-2">
                    <img src="/imagenes/red.png" alt="Imagen 4" class="w-10 h-10 object-cover">
                </div>
            </div>
        </div>
    </div>        </div>
        </div>
    </div>
</x-app-layout>
