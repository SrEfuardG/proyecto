<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GyMx-LEST - Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GyMx</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-size: medium;
                line-height: 1.5;
                min-height: 100vh;
                background: #f3f3f3;
                flex-direction: column;
                margin: 0;
                background-image: url('{{ asset('imagenes/fondo.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                visibility: 50%;
            }

            .main {
                background-color: white;
                border-radius: 20px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                padding: 10px 20px;
                transition: transform 0.2s;
                width: 400px;
                text-align: center;
                margin-top: 60px; 
            }

            /* Estilo de los botones */
            button {
                padding: 15px;  
                border-radius: 10px;
                margin-top: 15px;
                margin-bottom: 15px;
                border: none;
                color: white;
                cursor: pointer;
                background-color: #FF9800; /* Color como en la imagen */
                width: 100%;
                font-size: 16px;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #F57C00; /* Color oscuro en hover */
            }

            .button-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            .register-btn {
                background-color: #9E9E9E; /* Gris para el botón de registrarse */
            }

            .register-btn:hover {
                background-color: #757575; /* Gris oscuro en hover */
            }

            h1 {
                color: gold;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
                -webkit-text-stroke: 0.4px black;
            }

            h3 {
                color: black;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            }

            label {
                display: block;
                width: 100%;
                margin-top: 10px;
                margin-bottom: 5px;
                text-align: left;
                color: black;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bold;
                font-size: large;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
                -webkit-text-stroke: 0.4px black;
            }

            input {
                display: block;
                width: 100%;
                margin-bottom: 15px;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            .wrap {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* Estilos para las notificaciones flotantes */
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #4CAF50;
                color: white;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                z-index: 1000;
                opacity: 1;
                transition: opacity 0.5s ease-in-out;
            }

            .notification.hidden {
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
        </style>
    </head>

    <body class="antialiased">
            <div class="main">
                <h1>Bienvenido a GyMx</h1>
                <h2>Que deseas hacer:</h2>
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><h3>Iniciar Sesion</h3></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><h3>Registrarme</h3></a>
                        @endif
                    @endauth
                </div>
            @endif       
            </div>
        </div>
    </body>
</html>
