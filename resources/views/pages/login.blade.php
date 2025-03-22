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
            <form action="authenticate" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</x-layouts.app>
