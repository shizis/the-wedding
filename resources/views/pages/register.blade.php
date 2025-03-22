<x-layouts.app>
    <div class="w-full h-svh">
        <div class="max-w-screen-lg mx-auto p-4 h-full">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="/create" class="gap-4" method="POST">
                @csrf
                <label for="name">
                    <span class="block">Name</span>
                    <input type="text" name="name" id="name">
                </label>
                <label for="email">
                    <span class="block">E-mail</span>
                    <input type="email" name="email" id="email">
                </label>
                <label for="password">
                    <span class="block">Password</span>
                    <input type="password" name="password" id="password">
                </label>
                <button type="submit" class="block cursor-pointer">Register</button>
            </form>
        </div>
    </div>
</x-layouts.app>
