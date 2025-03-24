<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guess List</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<body class="font-lora touch-pan-y bg-angga-laras-bg">
    <div class="w-full mx-auto">
        <div class="w-full mx-auto bg-white shadow-sm">
            <div class="max-w-screen-lg mx-auto p-4">
                <div class="flex text-black justify-between items-center">
                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <p>{{ $name }}</p>
                    </div>
                    <div>
                        <a href="logout"
                            class="text-sm bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Log
                            Out</a>
                    </div>
                </div>
            </div>
        </div>
        <livewire:create-guess></livewire:create-guess>
    </div>
    <script>
        document.querySelectorAll('[data-copy-button]').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.dataset.copyTarget;
                const targetElement = document.getElementById(targetId);
                // const textToCopy = targetElement.textContent.replace(/\s/g, '');
                const textToCopy = targetElement.href;

                navigator.clipboard.writeText(textToCopy).then(() => {
                    // Visual feedback
                    const originalText = this.innerHTML;
                    this.innerHTML = 'Copied!';
                    setTimeout(() => {
                        this.innerHTML = originalText;
                    }, 2000);
                }).catch(err => {
                    console.error('Failed to copy:', err);
                });

            })
        })
    </script>
    @livewireScriptConfig
</body>

</html>
