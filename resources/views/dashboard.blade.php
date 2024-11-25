<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
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
                    {{ __("Bienvenido a GyMx!") }}
                </div>

                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Sobre Nosotros:") }}
                </div>
                <div class="p-2 text-gray-900 dark:text-gray-100">
                    {{ __("GyMx-LEST está dedicada a aquellos que buscan llevar su entrenamiento al siguiente nivel. Con un enfoque fresco, moderno y audaz, ofrecemos ropa de gimnasio diseñada para destacar tanto en rendimiento como en estilo. Cada pieza está hecha con materiales de alta calidad, pensada para ajustarse a tu cuerpo y acompañarte en cada movimiento. Ya sea en el gimnasio o en tu día a día, buscamos inspirarte a superar tus límites con ropa que se adapta a tu energía. Somos una marca joven, en constante evolución, que cree en el poder de la comunidad fitness 
                        y en la importancia de sentirse bien consigo mismo mientras se trabaja por ser mejor cada día.") }}
                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Productos destacados") }}
                </div>
                        <div class="p-9 text-gray-900 dark:text-gray-100">
                            <img src="{{ asset('imagenes/army.png') }}" alt="Playera Over Size">
                            <div class="p-9 text-gray-900 dark:text-gray-100">
                    {{ __("Playera Over Size.
                        $499 MXN") }}
                        <a class="hero"href="{{ route('gymx') }}" class="cta-button"> Ver Colección</a>
                </div>
                            
                        </div>
                        <!-- Más productos aquí -->
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
