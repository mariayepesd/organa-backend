<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Organa - Comida Saludable</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="min-h-screen bg-gradient-to-br from-green-50 to-green-100 flex items-center justify-center font-sans">

        @auth
            <a href="{{ url('/logout') }}"
            class="absolute top-4 right-4 px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600
                transition">
                Cerrar Sesión
            </a>
        @endauth

        <div class="max-w-md w-full bg-white shadow-xl rounded-3xl p-10 text-center border border-green-100">

            <div class="mb-6">
                <div class="w-16 h-16 mx-auto flex items-center justify-center bg-green-100 rounded-full">
                    <span class="text-3xl">🌱</span>
                </div>
                <h1 class="text-4xl font-extrabold text-green-700 mt-4">Organa</h1>
                <p class="text-gray-500 mt-2">Comida saludable y deliciosa</p>
            </div>

            <p class="text-gray-600 mb-8 leading-relaxed">
                Bienvenido a <span class="font-semibold text-green-700">Organa</span>, tu espacio para disfrutar platos
                nutritivos, frescos y balanceados.
            </p>

            @guest
                <a href="{{ url('/login') }}"
                    class="inline-block px-6 py-3 w-full bg-gradient-to-r from-green-500 to-green-600 text-white
                    font-semibold rounded-xl shadow-md hover:from-green-600 hover:to-green-700 transition duration-200">
                    Iniciar Sesión
                </a>
            @elseif(auth()->user())
                <div class="mb-6">
                    <p class="text-lg text-gray-700">Hola, <span class="font-bold text-green-700">
                        {{ auth()->user()->email }}</span> 👋
                    </p>
                </div>
            @endguest

            <!-- Footer -->
            <div class="mt-8 text-xs text-gray-400">
                © {{ date('Y') }} Organa. Todos los derechos reservados.
            </div>
        </div>

    </body>
</html>
