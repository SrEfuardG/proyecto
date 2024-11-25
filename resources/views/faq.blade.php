<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ - Preguntas Frecuentes') }}
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
        .faq-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            padding: 20px;
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        /* Título */
        .faq-container h2 {
            color: gold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
            -webkit-text-stroke: 0.4px black;
        }

        /* Estilos para las preguntas */
        .faq-question {
            padding: 10px;
            background-color: #FF9800;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 10px;
            font-weight: bold;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            display: none;
            padding: 10px;
            background-color: #f2f2f2;
            border-radius: 10px;
            margin-top: 5px;
            font-size: 14px;
            color: black;
        }

        /* Transición para el acordeón */
        .faq-question:hover {
            background-color: #F57C00;
        }

        .faq-button {
            background-color: transparent;
            border: none;
            font-size: 18px;
            color: black;
        }
        .p{
            color: grey;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 1.5em;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="faq-container">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="p">
                    <p>Aquí se enlistan las preguntas más frecuentes de nuestros usuarios GyMx:</p>
                    </div>
                    

                    <!-- Acordeón de preguntas frecuentes -->
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(0)">
                            ¿Quien soy?
                            <button class="faq-button">+</button>
                        </div>
                        <div class="faq-answer" id="faq-answer-0">
                            Mi nombre es Luis Eduardo Sierra Torres, creador de GyMx-LEST.
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(1)">
                            ¿Cuánto tarda el envío?
                            <button class="faq-button">+</button>
                        </div>
                        <div class="faq-answer" id="faq-answer-1">
                            El tiempo estimado de envío es de 3 a 5 días hábiles dependiendo de tu ubicación.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(2)">
                            ¿Puedo devolver productos?
                            <button class="faq-button">+</button>
                        </div>
                        <div class="faq-answer" id="faq-answer-2">
                            Sí, aceptamos devoluciones dentro de los primeros 30 días de compra, siempre que el producto esté en su estado original.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleAnswer(3)">
                            ¿Cómo puedo saber mi talla?
                            <button class="faq-button">+</button>
                        </div>
                        <div class="faq-answer" id="faq-answer-3">
                            Puedes consultar nuestra tabla de tallas en la página de cada producto o contactarnos para asistencia personalizada.
                        </div>
                    </div>

                    <!-- Añadir más preguntas si es necesario -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para mostrar/ocultar las respuestas
        function toggleAnswer(index) {
            var answer = document.getElementById('faq-answer-' + index);
            var button = answer.previousElementSibling.querySelector('.faq-button');
            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
                button.textContent = '-';
            } else {
                answer.style.display = 'none';
                button.textContent = '+';
            }
        }
    </script>
</x-app-layout>
