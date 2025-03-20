<x-layouts.app title="Guess List">
    <div class="w-full mx-auto">
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
</x-layouts.app>
