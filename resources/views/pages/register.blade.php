<x-layouts.app title="Register">
    <div class="w-full h-svh">
        <div class="max-w-screen-sm mx-auto p-4 h-full place-content-center">
            @if ($errors->any())
                <div class="p-4 bg-red-500/20 rounded-lg mb-4">
                    <p class="text-red-500">{{ $value }}</p>
                </div>
            @endif
            <form action="/create"
                class="grid w-full p-4 border border-gray-100 rounded-lg shadow-lg inset-shadow-sm bg-white"
                method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full mt-1 mb-3 rounded-lg border border-gray-400 p-2 focus:outline-blue-500">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email"
                    class="w-full mt-1 mb-3 rounded-lg border border-gray-400 p-2 focus:outline-blue-500">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full mt-1 mb-3 rounded-lg border border-gray-400 p-2 focus:outline-blue-500">
                <button type="submit"
                    class="bg-blue-500 p-4 cursor-pointer mt-4 rounded-lg text-white hover:bg-blue-700">Register</button>
            </form>
        </div>
    </div>
</x-layouts.app>
