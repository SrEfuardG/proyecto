<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informacion') }}
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
        .info-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 900px;
            width: 100%;
            text-align: center;
        }

        /* Estilo para la imagen de perfil */
        .info-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover; /* Asegura que la imagen no se distorsione */
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
        .bio-text {
            font-size: 20px;
            color: black;
            line-height: 1.6;
            margin-top: 20px;
        }
        h3 {
            color: #FF9800;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 1.5em;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="info-container">
                        <div class="info-card">
                            <!-- Foto de perfil centrada -->
                            <img src="{{ asset('imagenes\yo.png') }}" alt="Mi Foto">

                            <!-- Título -->
                            <h3>Acerca del Alumno</h3>

                            <!-- Texto de la biografía -->
                            <p class="bio-text">
                                Hola, mi nombre es Luis Eduardo Sierra Torres, soy estudiante de la carrera de informática en el Centro Universitario de Ciencias Exactas e Ingenierías (CUEI). Desde pequeño, siempre me apasionó el saber cómo funcionaban las cosas, desarmaba cosas para ver su funcionamiento y luego las volvía a armar. Por eso es que me interesa tanto la programación web, ya que de cierta manera es cómo saber cómo funcionan las páginas que vemos día a día.
                            </p>

                            <!-- Botón de acción (si deseas que se dirija a otra página o acción) -->
                            <a href="faq" class="info-button"><h3>Ver más sobre mí</h3></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
