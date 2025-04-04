
document.addEventListener('DOMContentLoaded', function () {
    const musicPlayer = document.getElementById('music');
    const openInvitationBtn = document.querySelector('a[href="#first"]');
    const body = document.body;
    const musicControl = document.getElementById('musicControl');
    const playIcon = document.getElementById('playIcon');
    const pauseIcon = document.getElementById('pauseIcon');

    // Kembali ke tampilan awal saat refresh dan hilangkan "#first" dari URL
    window.onload = function () {
        window.scrollTo(0, 0);

        // Menghilangkan "#first" dari URL jika ada
        if (window.location.hash === "#first") {
            history.replaceState(null, document.title, window.location.pathname + window.location.search);
        }
    };

    // Create a global object for scroll direction that can be accessed by Alpine
    let lastScrollY;
    window.alpineScrollDirection = { isScrollingUp: false };

    document.addEventListener("scroll", (event) => {
        const currentScroll = window.scrollY;
        window.alpineScrollDirection.isScrollingUp = currentScroll < lastScrollY;
        lastScrollY = currentScroll;
    });

    // Enhanced intersection observer
    function intFunction(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                for (let i = 0; i < entry.target.children.length; i++) {
                    const classIn = entry.target.children[i].getAttribute('data-class-in');
                    const classOut = entry.target.children[i].getAttribute('data-class-out');
                    if (classOut) {
                        entry.target.children[i].classList.remove(...classOut.split(' '));
                    }
                    if (classIn) {
                        entry.target.children[i].classList.add(...classIn.split(' '));
                    }
                }
            } else if (window.alpineScrollDirection.isScrollingUp) {
                for (let i = 0; i < entry.target.children.length; i++) {
                    const classIn = entry.target.children[i].getAttribute('data-class-in');
                    const classOut = entry.target.children[i].getAttribute('data-class-out');
                    if (classOut) {
                        entry.target.children[i].classList.add(...classOut.split(' '));
                    }
                    if (classIn) {
                        entry.target.children[i].classList.remove(...classIn.split(' '));
                    }
                }
            }
        })
    }
    // Use better options for more control
    const options = {
        threshold: 0.1, // Element is considered visible when 10% is visible
        rootMargin: '0px 0px 0px 0px'
    }

    // Find all elements with 'intersect' class
    const intersectElements = document.querySelectorAll('[data-observe]');
    const observer = new IntersectionObserver(intFunction, options);

    // Observe all intersect elements
    intersectElements.forEach(element => {
        observer.observe(element);
    });

    // Pastikan scroll ke atas saat halaman dimuat
    window.history.scrollRestoration = "manual";

    // Nonaktifkan autoplay awal
    // musicPlayer.pause();

    // Nonaktifkan scrolling saat halaman dimuat
    body.style.overflow = 'hidden';

    // Fungsi untuk mencegah scrolling
    function preventScroll(e) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    }

    // Tambahkan event listener untuk mencegah scrolling
    window.addEventListener('wheel', preventScroll, { passive: false });
    window.addEventListener('touchmove', preventScroll, { passive: false });

    // Putar musik dan aktifkan scrolling saat tombol "buka undangan" diklik
    openInvitationBtn.addEventListener('click', function () {
        // Mulai musik dari detik ke-15 (skip intro)
        // Atur sesuai kebutuhan (dalam detik)

        // Putar musik
        musicPlayer.currentTime = 5;
        musicPlayer.play()
            .then(() => {
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            })
            .catch(error => {
                console.log('Autoplay gagal:', error);
            });

        // Aktifkan scrolling
        body.style.overflow = '';
        window.removeEventListener('wheel', preventScroll);
        window.removeEventListener('touchmove', preventScroll);

        // Sembunyikan tombol buka undangan
        openInvitationBtn.parentElement.classList.remove('inline-flex');
        openInvitationBtn.parentElement.classList.add('hidden');
    });

    // Toggle music play/pause dengan floating button
    musicControl.addEventListener('click', function () {
        if (musicPlayer.paused) {
            // Jika musik belum pernah diputar, mulai dari detik ke-5
            if (musicPlayer.currentTime === 0) {
                musicPlayer.currentTime = 5; // Atur sesuai kebutuhan (dalam detik)
            }

            musicPlayer.play()
                .then(() => {
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                })
                .catch(error => {
                    console.log('Pemutaran gagal:', error);
                });
        } else {
            musicPlayer.pause();
            playIcon.classList.remove('hidden');
            pauseIcon.classList.add('hidden');
        }
    });

    // copy button
    document.querySelectorAll('[data-copy-button]').forEach(button => {
        // console.log(button.dataset)
        button.addEventListener('click', function () {
            const targetId = this.dataset.copyTarget;
            const targetElement = document.getElementById(targetId);
            const textToCopy = targetElement.textContent.replace(/\s/g, '');

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
});
