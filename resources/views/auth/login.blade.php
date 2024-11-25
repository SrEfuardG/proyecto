<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GyMx-LEST - Login</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            margin: 0;
            background-image: url('{{ asset('imagenes/fondo.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .main {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            padding: 40px;
            width: 400px;
            text-align: center;
            margin-top: 60px;
        }

        h1 {
            color: gold;
            font-size: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        }

        h2 {
            color: black;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: black;
            font-weight: bold;
            font-size: 16px;
        }

        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #FF9800;
            color: white;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #F57C00;
        }

        .register-btn {
            background-color: #9E9E9E;
        }

        .register-btn:hover {
            background-color: #757575;
        }

        .forgot-password {
            margin-top: 10px;
            font-size: 12px;
            color: #666;
        }

        .forgot-password a {
            color: #FF9800;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Bienvenido a GyMx-LEST</h1>
        <h2>Iniciar sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Usuario -->
            <div>
                <label for="email">Usuario</label>
                <input id="email" type="text" name="email" required autofocus placeholder="Usuario" value="{{ old('email') }}">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Contraseña -->
            <div>
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required placeholder="Contraseña">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Botones -->
            <div class="button-container">
                <button type="submit">Iniciar sesión</button>
                <button type="button" class="register-btn" onclick="window.location='{{ route('register') }}'">Registrarme</button>
            </div>

            <div class="forgot-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
        </form>
    </div>
</body>
</html>
