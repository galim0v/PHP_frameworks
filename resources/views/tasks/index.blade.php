<x-layout>
    <div class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-6xl mx-auto">
            @auth
            <div class="text-right">
                <button id="switchTheme" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out mr-2">
                    Switch Theme
                </button>
                <a href="{{ route('user.logout') }}" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">LogOut</a>
            </div>
            @endauth
            <div class="mb-4 text-center">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-gray-800">Task Dashboard</h2>
                <a href="{{ route('tasks.create') }}" class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">Create New Task</a>
                <button id="toggleCompleted" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-400 transition duration-300 ease-in-out">
                    Toggle Completed Tasks
                </button>
                <button id="clearTasks" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-400 transition duration-300 ease-in-out">
                    Clear All Tasks
                </button>

            </div>

            @if ($tasks)
                <ul class="mt-4">
               @foreach ($tasks as $task)
                        <li class="{{ $task->Completed ? 'completed bg-green-100' : 'bg-white' }} p-4 rounded-lg shadow-lg mb-4">
                            <h3 class="{{ $task->Completed ? 'text-black' : 'dark:text-black' }} text-lg font-semibold">
                                {{ $task->Title }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ Str::limit($task->Description, 100) }}</p>
                            <div class="mt-4">
                                <a href="{{ route('tasks.show', ['task' => $task->id]) }}" 
                                    class="bg-gray-800 text-white px-3 py-1 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">View</a>
                                <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" 
                                    class="bg-gray-800 text-white px-3 py-1 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">Edit</a>
                                <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                        class="bg-gray-800 text-white px-3 py-1 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out">Delete</button>
                                </form>
                                @if ($task->Completed)
                                    <span class="px-2 py-1 rounded-md bg-green-500 text-white ml-2">Completed</span>
                                @endif
                            </div>
                        </li>
                    @endforeach

                </ul>
                <div class="mt-6 p-4">
                    {{-- {{$tasks->links()}} --}}
                </div>
            @else
                <p class="text-gray-600 text-center mt-4">No tasks available.</p>
            @endif
        </div>
    </div>

    <script>
        document.getElementById('toggleCompleted').addEventListener('click', function() {
            const completedTasks = document.querySelectorAll('.completed');
            completedTasks.forEach(task => {
                task.classList.toggle('hidden');
            });
        });

        document.getElementById('switchTheme').addEventListener('click', function() {
            const body = document.body;
            body.classList.toggle('dark');
        });
    </script>

    <style>
        .dark {
            background-color: #1a202c;
            color: #f7fafc;
        }
        .dark .bg-gray-100 {
            background-color: #2d3748;
        }
        .dark .bg-white {
            background-color: #4a5568;
        }
        .dark .text-gray-800 {
            color: #f7fafc;
        }
        .dark .text-gray-600 {
            color: #a0aec0;
        }
    </style>
</x-layout>
