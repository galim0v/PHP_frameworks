<x-layout>
    <!-- Login Form -->
    <div class="bg-gray-100 min-h-screen flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:w-96">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Register</h2>

            <!-- Login Form -->
            <form method="POST" action="{{ route('user.register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-semibold">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="w-full px-4 py-2 border rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                        required
                        autofocus
                    />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                        required
                    />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email2" class="block text-gray-700 text-sm font-semibold">Email Confirmation</label>
                    <input
                        type="email"
                        id="email2"
                        name="email_confirmation"
                        class="w-full px-4 py-2 border rounded-lg @error('email_confirmation') border-red-500 @enderror"
                        value="{{ old('email_confirmation') }}"
                        required
                    />
                    @error('email_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror"
                        required
                    />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password2" class="block text-gray-700 text-sm font-semibold">Confirm Password</label>
                    <input
                        type="password"
                        id="password2"
                        name="password_confirmation"
                        class="w-full px-4 py-2 border rounded-lg @error('password_confirmation') border-red-500 @enderror"
                        required
                    />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-gray-800 text-white text-sm font-semibold py-2 rounded-lg hover:bg-gray-600 transition duration-300 ease-in-out">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
