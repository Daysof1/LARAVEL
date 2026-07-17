<x-app-layout>
    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="rounded-2xl shadow-xl p-10 mb-10 text-center bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
                <h3 class="text-4xl font-extrabold text-white mb-3 drop-shadow-lg">¡Bienvenido al Inventario!</h3>
                <p class="text-lg text-gray-100 mb-2">Gestiona tu inventario de manera <span class='font-bold text-yellow-300'>fácil</span> y <span class='font-bold text-yellow-300'>rápida</span>.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div class="rounded-xl shadow-lg p-8 flex flex-col items-center bg-white dark:bg-gray-800 hover:scale-105 transition-transform border-t-4 border-blue-500">
                    <div class="mb-3 text-4xl text-blue-600 dark:text-blue-400">👥</div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-1">Usuarios</h4>
                    <p class="text-gray-500 dark:text-gray-400 mb-4 text-center">Administra los usuarios del sistema.</p>
                    <a href="{{route('usuarios.index')}}" class="px-4 py-2 rounded bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Ir a Usuarios</a>
                </div>
                <div class="rounded-xl shadow-lg p-8 flex flex-col items-center bg-white dark:bg-gray-800 hover:scale-105 transition-transform border-t-4 border-purple-500">
                    <div class="mb-3 text-4xl text-purple-600 dark:text-purple-400">📂</div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-1">Categorías</h4>
                    <p class="text-gray-500 dark:text-gray-400 mb-4 text-center">Gestiona las categorías de productos.</p>
                    <a href="{{route('categorias.index')}}" class="px-4 py-2 rounded bg-purple-600 text-white font-semibold hover:bg-purple-700 transition">Ir a Categorías</a>
                </div>
                <div class="rounded-xl shadow-lg p-8 flex flex-col items-center bg-white dark:bg-gray-800 hover:scale-105 transition-transform border-t-4 border-pink-500">
                    <div class="mb-3 text-4xl text-pink-600 dark:text-pink-400">🗂️</div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-1">Subcategorías</h4>
                    <p class="text-gray-500 dark:text-gray-400 mb-4 text-center">Organiza las subcategorías de productos.</p>
                    <a href="{{route('subcategorias.index')}}" class="px-4 py-2 rounded bg-pink-600 text-white font-semibold hover:bg-pink-700 transition">Ir a Subcategorías</a>
                </div>
                <div class="rounded-xl shadow-lg p-8 flex flex-col items-center bg-white dark:bg-gray-800 hover:scale-105 transition-transform border-t-4 border-yellow-400">
                    <div class="mb-3 text-4xl text-yellow-500 dark:text-yellow-300">📦</div>
                    <h4 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-1">Productos</h4>
                    <p class="text-gray-500 dark:text-gray-400 mb-4 text-center">Controla los productos del inventario.</p>
                    <a href="{{route('productos.index')}}" class="px-4 py-2 rounded bg-yellow-400 text-gray-900 font-semibold hover:bg-yellow-500 transition">Ir a Productos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
