<x-layout>
    <!-- Navigation -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-end items-center">
            <a href="/login" class="text-white hover:text-gray-300 px-3 py-2 rounded-lg hover:bg-gray-600 transition duration-300 ease-in-out">Login</a>
            <a href="/register" class="text-white hover:text-gray-300 px-3 py-2 rounded-lg hover:bg-gray-600 transition duration-300 ease-in-out">Register</a>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="bg-gray-100 min-h-screen">
        <div class="container mx-auto mt-12">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-gray-800">Task App</h1>
                <p class="mt-2 text-gray-600">Manage your tasks easily!</p>
            </div>

            <!-- Static Content -->
            <div class="mt-12 p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4">Welcome to Task App</h2>
                <p class="text-gray-700">
                    Task App is a simple and efficient tool for managing your tasks. You can create, edit, and complete tasks with ease.
                </p>
                <p class="text-gray-700 mt-2">
                    Get started by signing up or logging in to your account. Let's make task management simple and organized!
                </p>
            </div>
        </div>
    </div>
</x-layout>
