<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-6xl mx-auto">
            @auth
            <div class="text-right">
                <a href="{{ route('tasks.index') }}" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">All Tasks</a>
                <a href="{{ route('user.logout') }}" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">LogOut</a>
            </div>
            @endauth
            @if ($task)
                <ul class="mt-4">
                        <li class="bg-white p-4 rounded-lg shadow-lg mb-4">
                            <h3 class="text-lg font-semibold text-black">{{ $task->Title }}</h3>
                            <p class="text-gray-600">{{ $task->Description }}</p>
                            
                            <div class="mt-2">
                            @if ($task->Completed)
                                <span class="px-2 py-1 rounded-md bg-green-500 text-white">Completed</span>
                            @endif
                            </div>
                        </li>
                </ul>
            @else
                <p class="text-gray-600 text-center mt-4">No tasks available.</p>
            @endif
        </div>
    </div>
</x-layout>
