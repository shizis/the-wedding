<x-layouts.app title="dr. Angga & dr. Laras">
    <audio id="music" preload="auto">
        <source src="{{ url('audio/jaz-bersamamu.mp3') }}" type="audio/mpeg">
    </audio>
    <!-- Floating Music Control Button -->
    <div id="musicControl"
        class="fixed bottom-5 right-5 z-40 bg-angga-laras-button-active text-angga-laras-black shadow-lg rounded-full p-3 cursor-pointer hover:bg-angga-laras-button-hover">
        <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>
    <!-- HERO -->
    <header class="z-50 snap-none">
        <div class="relative h-svh w-full z-50" data-observe>
            <div class="h-full w-full" data-observe>
                <img src="{{ url('images/WA0033-nowm.jpg') }}" alt=""
                    class="object-cover object-bottom w-full h-full transform transition duration-1000 -translate-y-50 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisble -translate-y-50 opacity-0" />
            </div>
            <div class="absolute inset-0 bg-black/35 h-full transform transition duration-1300 delay-200 opacity-0"
                data-class-in="opacity-100" data-class-out="opacity-0">
            </div>
            <div class="absolute inset-0 flex items-center justify-center top-20 max-w-screen-xl mx-auto">
                <div class="text-center" data-observe>
                    <div class="transform transition duration-1000 delay-300 invisible -translate-y-50 opacity-0"
                        data-class-in="visible translate-y-0 opacity-100"
                        data-class-out="invisible -translate-y-50 opacity-0">
                        <p class="font-normal text-light-100 px-4 text-angga-laras-white text-sm md:text-base">
                            The Wedding Of
                        </p>
                        <h1
                            class="text-angga-laras-white font-ephesis my-4 text-4xl sm:text-5xl md:text-6xl xl:text-8xl">
                            dr.Angga & dr.Laras
                        </h1>
                    </div>
                    <div class="transform transition duration-1000 delay-300 invisible -translate-y-10 opacity-0"
                        data-class-in="visible translate-y-0 opacity-100"
                        data-class-out="invisible -translate-y-10 opacity-0">
                        <p class="text-angga-laras-white text-sm md:text-base">11.04.2025</p>
                    </div>
                    <div class="mt-30 grid justify-items-center transform transition duration-1000 delay-200 invisible translate-y-25 opacity-0"
                        data-class-in="visible translate-y-0 opacity-100"
                        data-class-out="invisible translate-y-25 opacity-0">
                        <div class="w-50">
                            <p class="text-angga-laras-white text-sm">Kepada Bapak/Ibu/Saudara/i</p>
                            <div class="border border-white p-4 mt-4 rounded-lg w-full">
                                <p class="text-angga-laras-white font-bold text-base" id="guessName">{{ $name }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 inline-flex items-center gap-2 justify-center bg-angga-laras-button-active py-2 px-6 rounded-full cursor-pointer font-bold hover:bg-angga-laras-button-hover transform transition-opacity duration-1000 delay-300 invisible translate-y-15 opacity-0"
                        data-class-in="visible translate-y-0 opacity-100"
                        data-class-out="invisible translate-y-15 opacity-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 -mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="#first" target="_self" class="text-sm">Buka
                            Undangan</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="w-full z-30 sticky top-0 bg-angga-laras-primary/75 backdrop-blur-xs">
        <div class="max-w-screen-xl mx-auto px-4 py-2 lg:flex items-center lg:justify-between" x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between">
                <div>
                    <h1 class="font-ephesis text-2xl text-angga-laras-amber">Angga & Laras</h1>
                </div>
                <button type="button" x-on:click="open = ! open" x-on:click.outside="open = false"
                    class="cursor-pointer place-items-center w-10 h-10 text-angga-laras-black rounded-md lg:hidden focus:outline-angga-laras-primary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15">
                        </path>
                    </svg>
                </button>
            </div>
            <div x-cloak :class="open || 'hidden'" class="lg:block">
                <ul
                    class="text-sm flex flex-col mt-4 lg:mt-0 lg:flex-row lg:items-center gap-4 font-semibold text-angga-laras-white">
                    <li class="">
                        <a href="#our_wedding">Our Wedding</a>
                    </li>
                    <li>
                        <a href="#wedding_events">Wedding Events</a>
                    </li>
                    <li>
                        <a href="#our_story">Our Story</a>
                    </li>
                    <li>
                        <a href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="#rsvp">RSVP</a>
                    </li>
                    <li>
                        <a href="#wedding_gift">Wedding Gift</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- BACKGROUND -->
    <div class="relative w-full h-max -z-10">
        <div class="absolute right-0 -top-1/2">
            <img class="opacity-50" src="{{ url('images/assets/6.png') }}" alt="" />
        </div>
    </div>
    <section class="">
        <div id="first" class="max-w-screen-md mx-auto text-center mt-6 p-4 snap-none" data-observe>
            <div class="invisible transform transition duration-1000 delay-100 translate-y-50 opacity-0"
                data-class-in="visible translate-y-0 opacity-100" data-class-out="invisible translate-y-50 opacity-0">
                <p class="font-[amiri] md:text-xl mb-4">&#65021;</p>
                <p class="text-sm md:text-base">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan
                    pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa
                    tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih
                    sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda (kebesaran Allah) bagi kaum yang berpikir"
                </p>
                <p class="italic text-gray-600 text-sm md:text-base">
                    QS. Ar-rum:21
                </p>
            </div>
        </div>
        <div class="flex justify-center max-w-screen-xl mx-auto">
            <img class="w-30 md:w-40 -z-10" src="{{ url('images/assets/8.png') }}" alt="" />
        </div>
        <div class="max-w-screen-xl mx-auto snap-none">
            <div class="flex gap-4 p-4" data-observe>
                <div class="invisible transform transition duration-1000 delay-100 translate-y-80 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-80 opacity-0">
                    <img src="{{ url('images/WA0002.jpg') }}" alt="" class="rounded-lg shadow-lg" />
                </div>
                <div class="invisible transform transition duration-1100 delay-200 translate-y-80 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-80 opacity-0">
                    <img src="{{ url('images/WA0013.jpg') }}" alt="" class="rounded-lg shadow-lg" />
                </div>
                <div class="invisible transform transition duration-1200 delay-300 translate-y-80 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-80 opacity-0">
                    <img src="{{ url('images/WA0001.jpg') }}" alt="" class="rounded-lg shadow-lg" />
                </div>
            </div>
        </div>
        <div class="max-w-screen-md mx-auto text-center p-4 z-20" data-observe>
            <p class="text-sm md:text-base transform transition duration-1000 invisible translate-y-25 opacity-0"
                data-class-in="visible translate-y-0 opacity-100" data-class-out="invisible translate-y-25 opacity-0">
                Maha suci Allah yang telah menciptakan mahluk-Nya berpasang-pasangan. Ya
                Allah, perkenalkanlah kami merangkaikan kasih sayang yang kau ciptakan
                diantara kami.
            </p>
        </div>
    </section>
    <!-- BACKGROUND -->
    <div class="relative w-full h-max -z-10">
        <div class="absolute left-0 -top-5 sm:-top-50">
            <img class="opacity-50" src="{{ url('images/assets/7.png') }}" alt="" />
        </div>
    </div>
    <!-- CALON PENGANTIN -->
    <div class="w-full bg-angga-laras-primary p-6 mt-10" id="our_wedding">
        <div class="w-55 md:w-3xs lg:w-xs relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 invisible translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-50 opacity-0">
                Our Wedding
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10 transform transition duration-1000 delay-150 invisible -translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-50 opacity-0">
        </div>
    </div>
    <div class="w-full h-100 md:h-128 lg:h-130 xl:h-180 mt-6">
        <div class="h-full relative" data-observe>
            <img src="{{ url('images/WA0005.jpg') }}" alt=""
                class="object-cover h-full object-bottom w-full transform duration-1000 invisible translte-y-100 opacity-0"
                data-class-in="visible translate-y-0 opacity-100"
                data-class-out="invisible translate-y-100 opacity-0" />
            <div class="absolute place-content-center text-center p-2 md:p-4 rounded-lg bg-angga-laras-primary/90 backdrop-blur-xs text-angga-laras-white w-xs md:w-xl lg:w-3xl -bottom-1/2 md:-bottom-1/4 lg:-bottom-1/3 xl:-bottom-1/5 left-1/2 -translate-x-1/2 shadow-lg transform duration-2000 delay-200 invisible translate-y-150 opacity-0"
                data-class-in="visible translate-y-0 opacity-100"
                data-class-out="invisible translate-y-150 opacity-0">
                <img class="absolute w-128 rotate-55 left-0 -z-10 opacity-50" src="{{ url('images/assets/7.png') }}"
                    alt="" />
                <img class="absolute w-128 rotate-55 right-0 bottom-0 -z-10 opacity-50"
                    src="{{ url('images/assets/6.png') }}" alt="" />
                <h1 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl">
                    dr. Angga Setiawan, M.K.M.
                </h1>
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28"
                        viewBox="0 0 48 48">
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                            r="44.899" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd5"></stop>
                            <stop offset=".328" stop-color="#ff543f"></stop>
                            <stop offset=".348" stop-color="#fc5245"></stop>
                            <stop offset=".504" stop-color="#e64771"></stop>
                            <stop offset=".643" stop-color="#d53e91"></stop>
                            <stop offset=".761" stop-color="#cc39a4"></stop>
                            <stop offset=".841" stop-color="#c837ab"></stop>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                        </path>
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                            r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#4168c9"></stop>
                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                        </path>
                        <path fill="#fff"
                            d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                        </path>
                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                        <path fill="#fff"
                            d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                        </path>
                    </svg>
                    <a target="_blank"
                        href="https://www.instagram.com/a.s_angga?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="ml-1 text-sm md:text-base">a.s_angga</a>
                </div>
                <p class="mt-2 lg:mt-4 text-sm md:text-base">Putra Pertama Dari :</p>
                <p class="font-semibold text-sm md:text-base">Bpk. Syawal & Ibu Santi</p>
                <p class="font-ephesis text-3xl lg:text-5xl my-2 md:my-4">&</p>
                <h1 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl">
                    dr. Laras Kusumaningtyas
                </h1>
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28"
                        viewBox="0 0 48 48">
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035"
                            r="44.899" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd5"></stop>
                            <stop offset=".328" stop-color="#ff543f"></stop>
                            <stop offset=".348" stop-color="#fc5245"></stop>
                            <stop offset=".504" stop-color="#e64771"></stop>
                            <stop offset=".643" stop-color="#d53e91"></stop>
                            <stop offset=".761" stop-color="#cc39a4"></stop>
                            <stop offset=".841" stop-color="#c837ab"></stop>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                        </path>
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54"
                            r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#4168c9"></stop>
                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                            d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                        </path>
                        <path fill="#fff"
                            d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                        </path>
                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                        <path fill="#fff"
                            d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                        </path>
                    </svg>
                    <a target="_blank"
                        href="https://www.instagram.com/laraskusumaningtyas_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="ml-1 text-sm md:text-base">laraskusumaningtyas_</a>
                </div>
                <p class="mt-2 lg:mt-4 text-sm md:text-base">Putri Pertama Dari :</p>
                <p class="font-semibold text-sm md:text-base">
                    Bpk. Supawit, M. Pd. &
                </p>
                <p class="font-semibold text-sm md:text-base">
                    Ibu Hanita Suryani, S. Pd.
                </p>
            </div>
        </div>
    </div>
    <div class="w-full bg-angga-laras-primary p-6 mt-60 md:mt-60" id="wedding_events">
        <div class="w-3xs md:w-2xs relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 invisible translate-x-25 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-25 opacity-0">
                Wedding Events
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10 transform transition duration-1000 invisible -translate-x-25 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-25 opacity-0">
        </div>
    </div>
    <div class="max-w-screen-md mx-auto text-center mt-4 p-4" data-observe>
        <p class="text-sm md:text-base transform transition duration-1000 invisible translate-y-25 opacity-0"
            data-class-in="visible translate-y-0 opacity-100" data-class-out="invisible translate-y-25 opacity-0">
            Dengan memohon Rahmat dan Ridho Allah SWT. Kami Bermaksud
            menyelenggarakan Resepsi Pernikahan putra-putri kami, yang insya allah
            akan dilaksanakan pada :
        </p>
    </div>
    <div class="max-w-screen-xl mx-auto p-4">
        <div class="flex flex-col lg:flex-row justify-center gap-4 h-full">
            <div class="bg-angga-laras-primary text-angga-laras-white basis-full sm:basis-1/2 z-0 relative min-h-full text-center p-4 rounded-lg shadow-xl"
                data-observe>
                <img class="absolute -z-10 top-0 -right-10 opacity-50" src="{{ url('images/assets/6.png') }}"
                    alt="" />
                <h3 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-100 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    Akad Nikah
                </h3>
                <hr class="my-4" />
                <p class="font-bold text-xl md:text-2xl mt-4 transform transition duration-1000 delay-200 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    Jum'at
                </p>
                <p class="font-bold text-3xl md:text-4xl my-2 transform transition duration-1000 delay-300 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    11
                </p>
                <p class="font-bold text-xl md:text-2xl transform transition duration-1000 delay-400 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    April 2025
                </p>
                <p class="mt-4 text-base transform transition duration-1000 delay-400 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    14:00 WIB ~ Selesai
                </p>
                <hr class="my-4" />
                <p class="text-sm md:text-base transform transition duration-1000 delay-300 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    Di Kediaman Mempelai Wanita
                </p>
                <p class="text-sm md:text-base transform transition duration-1000 delay-200 invisible -translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0">
                    Kota Manna, Kab. Bengkulu Selatan
                </p>
                <div data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible -translate-x-100 opacity-0"
                    class="mt-4 inline-flex bg-angga-laras-button-active rounded-full py-2 px-6 justify-center items-center text-angga-laras-black shadow-md hover:bg-angga-laras-button-hover hover:transition-none font-semibold transform transition duration-1000 delay-100 invisible -translate-x-100 opacity-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <a class="ml-2" href="https://maps.app.goo.gl/1ScsoSbhMjCEzb3J8" target="_blank">Kunjungi
                        Lokasi</a>
                </div>
            </div>
            <div class="basis-full sm:basis-1/2 z-0 bg-angga-laras-primary text-angga-laras-white relative min-h-full text-center p-4 rounded-lg shadow-xl"
                data-observe>
                <img class="absolute -z-10 bottom-0 -left-10 opacity-50" src="{{ url('images/assets/7.png') }}"
                    alt="" />
                <h3 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-100 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Resepsi
                </h3>
                <hr class="my-4" />
                <p class="font-bold text-xl md:text-2xl mt-4 transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Sabtu ~ Minggu
                </p>
                <p class="font-bold text-3xl md:text-4xl my-2 transform transition duration-1000 delay-300 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    12 ~ 13
                </p>
                <p class="font-bold text-xl md:text-2xl transform transition duration-1000 delay-400 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    April 2025
                </p>
                <p class="mt-4 text-base transform transition duration-1000 delay-400 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    08:00 WIB ~ Selesai
                </p>
                <hr class="my-4" />
                <p class="text-sm md:text-base transform transition duration-1000 delay-300 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Di Kediaman Mempelai Wanita
                </p>
                <p class="text-sm md:text-base transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Kota Manna, Kab. Bengkulu Selatan
                </p>
                <div data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0"
                    class="mt-4 inline-flex bg-angga-laras-button-active rounded-full py-2 px-6 justify-center items-center text-angga-laras-black shadow-md hover:bg-angga-laras-button-hover hover:transition-none font-semibold transform transition duration-1000 delay-100 invisible translate-x-100 opacity-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <a class="ml-2" href="https://maps.app.goo.gl/1ScsoSbhMjCEzb3J8" target="_blank">Kunjungi
                        Lokasi</a>
                </div>
            </div>
            <div class="basis-full sm:basis-1/2 z-0 bg-angga-laras-primary text-angga-laras-white relative min-h-full text-center p-4 rounded-lg shadow-xl"
                data-observe>
                <img class="absolute -z-10 top-0 -right-10 opacity-50" src="{{ url('images/assets/6.png') }}"
                    alt="" />
                <h3 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-100 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Ngunduh Mantu
                </h3>
                <hr class="my-4" />
                <p class="font-bold text-xl md:text-2xl mt-4 transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Sabtu ~ Minggu
                </p>
                <p class="font-bold text-3xl md:text-4xl my-2 transform transition duration-1000 delay-300 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    19 ~ 20
                </p>
                <p class="font-bold text-xl md:text-2xl transform transition duration-1000 delay-400 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    April 2025
                </p>
                <p class="mt-4 text-base transform transition duration-1000 delay-400 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    13:00 WIB ~ Selesai
                </p>
                <hr class="my-4" />
                <p class="text-sm md:text-base transform transition duration-1000 delay-300 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Di Kediaman Mempelai Pria
                </p>
                <p class="text-sm md:text-base transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Perbatasan desa Sungai Sikai dan Tangkil
                </p>
                <div data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0"
                    class="mt-4 inline-flex bg-angga-laras-button-active rounded-full py-2 px-6 justify-center items-center text-angga-laras-black shadow-md hover:bg-angga-laras-button-hover hover:transition-none font-semibold transform transition duration-1000 delay-100 invisible translate-x-100 opacity-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <a class="ml-2" href="https://maps.app.goo.gl/LNMEFtZxkb4PDA4u6" target="_blank">Kunjungi
                        Lokasi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-max -z-10">
        <div class="absolute right-0 -top-1/2">
            <img class="opacity-50" src="{{ url('images/assets/4.png') }}" alt="" />
        </div>
    </div>
    <div class="max-w-md md:max-w-lg mx-auto text-center" data-observe>
        <p class="text-sm md:text-base transform transition duration-1000 delay-100 invisible translate-y-25 opacity-0"
            data-class-in="visible translate-y-0 opacity-100" data-class-out="invisible translate-y-25 opacity-0">
            Kesan
            yang mendalam terukir di lubuk hati kami sekeluarga apabila
            Bapak/Ibu/Sdr/i berkenan hadir serta memberikan do'a dan merestui langkah awal hidup putra putri
            kami.
        </p>
    </div>
    <div class="w-full bg-angga-laras-primary p-6 mt-10" id="our_story">
        <div class="w-55 md:w-60 lg:w-2xs relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 invisible translate-x-25 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-25 opacity-0">
                Our Love Story
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10 transform transition duration-1000 delay-200 invisible -translate-x-25 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-25 opacity-0">
        </div>
    </div>
    <div class="max-w-screen-md mx-auto p-4">
        <div class="flex flex-col gap-4" data-observe>
            <div class="bg-angga-laras-primary/80 text-angga-laras-white shadow-sm backdrop-blur-xs rounded-lg p-4 transform transition duration-1000 delay-100 invisible translate-x-100 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible translate-x-100 opacity-0">
                <h2 class="text-lg font-bold mb-2 text-angga-laras-amber">First Meet (2018)</h2>
                <p>Bulan Januari 2018 kami pertama kali bertemu dalam sebuah himpunan mahasiswa. Selama kami dalam
                    himpunan
                    yang
                    sama kami hanya teman biasa.</p>
            </div>
            <div class="bg-angga-laras-primary/80 text-angga-laras-white shadow-sm backdrop-blur-xs rounded-lg p-4 transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible translate-x-100 opacity-0">
                <h2 class="text-lg font-bold mb-2 text-angga-laras-amber">Relationship (2018)</h2>
                <p>15 Desember 2018 kami memutuskan untuk mulai berkomitmen.</p>
            </div>
            <div class="bg-angga-laras-primary/80 text-angga-laras-white shadow-sm backdrop-blur-xs rounded-lg p-4 transform transition duration-1000 delay-300 invisible translate-x-100 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible translate-x-100 opacity-0">
                <h2 class="text-lg font-bold mb-2 text-angga-laras-amber">Engagement (2024)</h2>
                <p>Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 09 November
                    2024.
                </p>
            </div>
            <div class="bg-angga-laras-primary/80 text-angga-laras-white shadow-sm backdrop-blur-xs rounded-lg p-4 transform transition duration-1000 delay-400 invisible translate-x-100 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible translate-x-100 opacity-0">
                <h2 class="text-lg font-bold mb-2 text-angga-laras-amber">Married (2025)</h2>
                <p>Kami memutuskan untuk mengikat janji suci pernikahan pada 11 April 2025.</p>
            </div>
        </div>
    </div>
    <!-- GALLERY -->
    <div class="w-full bg-angga-laras-primary p-6 mt-10" id="gallery">
        <div class="w-45 md:w-50 lg:w-55 relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-100 invisible translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-50 opacity-0">
                Gallery
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10 transform transition duration-1000 delay-100 invisible -translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-50 opacity-0">
        </div>
    </div>
    <div class="relative w-full -z-10">
        <div class="absolute left-0 top-0">
            <img class="opacity-50" src="{{ url('images/assets/7.png') }}" alt="" />
        </div>
    </div>
    <!-- GALLERY -->
    <div class="max-w-screen-xl mx-auto mt-6 p-4">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0000.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0000.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0003.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1100 delay-110"
                        x-transition:enter-start="opacity-0 translate-x-110"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0003.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0002.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1200 delay-120"
                        x-transition:enter-start="opacity-0 translate-x-120"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0002.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0007.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1000 delay-100"
                        x-transition:enter-start="opacity-0 translate-x-100"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0007.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0004.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1100 delay-110"
                        x-transition:enter-start="opacity-0 translate-x-110"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0004.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0008.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1200 delay-120"
                        x-transition:enter-start="opacity-0 translate-x-120"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0008.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0011.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1000 delay-100"
                        x-transition:enter-start="opacity-0 translate-x-100"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0011.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0012.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1100 delay-110"
                        x-transition:enter-start="opacity-0 translate-x-110"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0012.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0013.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1200 delay-120"
                        x-transition:enter-start="opacity-0 translate-x-120"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0013.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer h-full transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0021.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1000 delay-100"
                        x-transition:enter-start="opacity-0 translate-x-100"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0021.jpg') }}" alt="" class="rounded-lg max-h-dvh">
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1000 delay-100 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0028.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1100 delay-110"
                        x-transition:enter-start="opacity-0 translate-x-110"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0028.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
            <div x-data="{ modal: false }" data-observe>
                <div class="cursor-pointer transform transition duration-1100 delay-250 invisible translate-y-100 opacity-0"
                    data-class-in="visible translate-y-0 opacity-100"
                    data-class-out="invisible translate-y-100 opacity-0" x-on:click="modal = true">
                    <img src="{{ url('images/WA0030.jpg') }}" alt=""
                        class="object-cover shadow-lg rounded-lg"
                        x-transition:enter="transition-all ease-in-out duration-1200 delay-120"
                        x-transition:enter-start="opacity-0 translate-x-120"
                        x-transition:enter-end="opacity-100 translate-x-0" />
                </div>
                <template x-teleport="body">
                    <div x-show="modal"
                        class="fixed flex justify-center items-center inset-0 z-50 p-4 bg-black/50 backdrop-blur-xs">
                        <div x-on:click.outside="modal = false" class="relative bg-transparent">
                            <img src="{{ url('images/WA0030.jpg') }}" alt="" class="rounded-lg max-h-dvh"
                                x-transition>
                            <button x-on:click="modal = false"
                                class="absolute top-0 right-0 bg-angga-laras-button-active hover:bg-angga-laras-button-hover text-angga-laras-black rounded-full m-2 p-1.5 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <div class="grid mt-6 mx-auto max-w-md">
            <video controls class="w-full rounded-md">
                <source src="{{ url('video/VID-20250321-WA0014.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="relative w-full -z-10">
        <div class="absolute left-0 md:-top-60">
            <img class="opacity-50" src="{{ url('images/assets/7.png') }}" alt="" />
        </div>
    </div>
    <div class="w-full bg-angga-laras-primary p-6 mt-10" id="rsvp">
        <div class="w-45 md:w-50 lg:w-55 relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-100 invisible translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-50 opacity-0">
                RSVP
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10 transform transition duration-1000 delay-100 invisible -translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-50 opacity-0">
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto p-4" x-data="{ open: false }">
        <h2 class="text-center my-4 text-base">Kirimkan Ucapan & Do'a untuk pengantin</h2>
        <div class="grid justify-items-center">
            <button x-on:click="open = !open"
                class="cursor-pointer grid grid-flow-col items-center gap-2 px-6 py-2 rounded-full bg-angga-laras-button-active text-angga-laras-black hover:bg-angga-laras-button-hover">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                </svg>
                <p class="text-sm">
                    Kirim ucapan
                </p>
            </button>
        </div>
        <livewire:create-comments />
    </div>
    <div class="w-full bg-angga-laras-primary p-6 mt-10" id="wedding_gift">
        <div class="w-50 md:w-53 lg:w-2xs relative text-center mx-auto z-10" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 invisible translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100" data-class-out="invisible translate-x-50 opacity-0">
                Wedding Gift
            </h2>
            <img src="{{ url('images/assets/14.png') }}" alt=""
                class="absolute w-24 lg:w-30 lg:-top-15 -top-10 -z-10  transform transition duration-1000 invisible -translate-x-50 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible -translate-x-50 opacity-0">
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto p-4">
        <div class="max-w-md mx-auto" data-observe>
            <p class="text-center text-sm md:text-base transform transition duration-1000 invisible translate-y-50 opacity-0"
                data-class-in="visible translate-y-0 opacity-100" data-class-out="invisible translate-y-50 opacity-0">
                Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah
                pernikahan
                dapat melalui virtual
                atau e-wallet di
                bawah ini:</p>
        </div>
        <div class="mx-auto mt-4" x-data="{ open: false }">
            <div class="grid justify-items-center">
                <button x-on:click="open = !open"
                    class="cursor-pointer grid grid-flow-col items-center gap-2 px-6 py-2 rounded-full bg-angga-laras-button-active text-angga-laras-black hover:bg-angga-laras-button-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <p class="text-sm">
                        Kirim Hadiah
                    </p>
                </button>
            </div>
            <div x-show="open" x-cloak
                class="bg-linear-to-t/oklch to-[#00529C]/50 from-blue-500/50 backdrop-blur-sm rounded-xl h-max max-w-md shadow-lg p-4 inset-shadow-sm mx-auto mt-4 grid gap-2 relative z-10">
                <!-- <div
                    class="absolute inset-0 bg-[linear-gradient(45deg,#ffffff33_50%,transparent_50%)] bg-[size:25px_25px] -z-11">
                </div> -->
                <div class="justify-self-end">
                    <img src="{{ url('images/assets/Logo_BRI.png') }}" alt="" class="w-25 lg:w-30">
                </div>
                <div class="justify-self-start">
                    <img src="{{ url('images/assets/chip-card') }}.png" alt="" class="w-20 lg:w-30">
                </div>
                <div class="ml-5">
                    <p class="font-bold" id="briNumber">5557&nbsp;0100&nbsp;9948&nbsp;534</p>
                    <p>a/n <span class="font-semibold">Angga Setiawan</span></p>
                </div>
                <div class="justify-self-end">
                    <div>
                        <button data-copy-button data-copy-target="briNumber"
                            class="cursor-pointer px-6 py-2 rounded-full bg-blue-500 text-angga-laras-white shadow-sm inset-shadow-xs hover:bg-blue-400">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-cloak
                class="bg-linear-to-t/oklch from-amber-400/50 to-[#f15a23]/50 backdrop-blur-sm rounded-xl h-max max-w-md shadow-lg p-4 inset-shadow-sm mx-auto mt-4 grid gap-2 relative z-10">
                <div class="justify-self-end">
                    <img src="{{ url('images/assets/BNI_logo.svg') }}" alt="" class="w-25 lg:w-30">
                </div>
                <div class="justify-self-start">
                    <img src="{{ url('images/assets/chip-card') }}.png" alt="" class="w-20 lg:w-30">
                </div>
                <div class="ml-5">
                    <p class="font-bold" id="bniNumber">1819152403</p>
                    <p>a/n <span class="font-semibold">Laras Kusumaningtyas</span></p>
                </div>
                <div class="justify-self-end">
                    <div>
                        <button data-copy-button data-copy-target="bniNumber"
                            class="cursor-pointer px-6 py-2 rounded-full bg-orange-600 text-angga-laras-white shadow-sm inset-shadow-xs hover:bg-orange-500">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="open" x-cloak
                class="bg-linear-to-t/oklch to-[#6887B4]/50 from-sky-500/50 backdrop-blur-sm rounded-xl h-max max-w-md shadow-lg p-4 inset-shadow-sm mx-auto mt-4 grid gap-2 relative z-10">
                <div class="justify-self-start">
                    <img src="{{ url('images/assets/Dana_logo.png') }}" alt="" class="w-25 lg:w-30">
                </div>
                <div class="ml-8 mt-4">
                    <p class="font-bold" id="danaNumber">0813&nbsp;7808&nbsp;1080</p>
                    <p>a/n <span class="font-semibold">Angga Setiawan</span></p>
                </div>
                <div class="justify-self-end">
                    <div>
                        <button data-copy-button data-copy-target="danaNumber"
                            class="cursor-pointer px-6 py-2 rounded-full bg-sky-600 text-angga-laras-white shadow-sm inset-shadow-xs hover:bg-sky-500">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-angga-laras-primary p-4 mt-10 bottom-0">
        <div class="max-w-screen-lg mx-auto">
            <div class="grid text-center text-angga-laras-white mt-6 justify-items-center [-webkit-justify-items:center]"
                data-observe>
                <p class="text-sm md:text-base transform transition duration-1000 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    Hormat Kami Yang Berbahagia
                </p>
                <p class="font-ephesis text-angga-laras-amber mt-4 text-3xl sm:text-4xl md:text-5xl transform transition duration-1000 invisible translate-x-100 opacity-0"
                    data-class-in="visible translate-x-0 opacity-100"
                    data-class-out="invisible translate-x-100 opacity-0">
                    dr. Angga & dr. Laras
                </p>
                <img class=" w-40" src="{{ url('images/assets/8.png') }}" alt="" />
            </div>
        </div>
        <div class="w-full text-center p-8 mt-0" data-observe>
            <h2 class="font-ephesis text-angga-laras-amber text-3xl md:text-4xl lg:text-5xl transform transition duration-1000 delay-200 invisible translate-x-100 opacity-0"
                data-class-in="visible translate-x-0 opacity-100"
                data-class-out="invisible translate-x-100 opacity-0">
                Happy Wedding!
            </h2>
        </div>
    </div>
    {{-- <script src="{{ url('js/index.js') }}"></script> --}}
    <script type="text/javascript">
        const musicPlayer = document.getElementById('music');
        const openInvitationBtn = document.querySelector('a[href="#first"]');
        const body = document.body;
        const musicControl = document.getElementById('musicControl');
        const playIcon = document.getElementById('playIcon');
        const pauseIcon = document.getElementById('pauseIcon');

        // Kembali ke tampilan awal saat refresh dan hilangkan "#first" dari URL
        // window.onload = function() {
        //     window.scrollTo(0, 0);

        //     // // Menghilangkan "#first" dari URL jika ada
        //     // if (window.location.hash === "#first") {
        //     //     history.replaceState(null, document.title, window.location.pathname + window.location.search);
        //     // }
        // };
        // // Pastikan scroll ke atas saat halaman dimuat
        // window.history.scrollRestoration = "manual";

        // // Nonaktifkan scrolling saat halaman dimuat
        // body.style.overflow = 'hidden';

        // function preventScroll(e) {
        //     e.preventDefault();
        //     e.stopPropagation();
        //     return false;
        // }

        // // Tambahkan event listener untuk mencegah scrolling
        // window.addEventListener('wheel', preventScroll, {
        //     passive: false
        // });
        // window.addEventListener('touchmove', preventScroll, {
        //     passive: false
        // });

        // // Putar musik dan aktifkan scrolling saat tombol "buka undangan" diklik
        // openInvitationBtn.addEventListener('click', function() {

        //     // Putar musik
        //     musicPlayer.play()
        //         .then(() => {
        //             playIcon.classList.add('hidden');
        //             pauseIcon.classList.remove('hidden');
        //         })
        //         .catch(error => {
        //             console.log('Autoplay gagal:', error);
        //         });

        //     // Aktifkan scrolling
        //     body.style.overflow = '';
        //     window.removeEventListener('wheel', preventScroll);
        //     window.removeEventListener('touchmove', preventScroll);

        //     // Sembunyikan tombol buka undangan
        //     openInvitationBtn.parentElement.classList.remove('inline-flex');
        //     openInvitationBtn.parentElement.classList.add('hidden');
        // });

        // // Toggle music play/pause dengan floating button
        // musicControl.addEventListener('click', function() {
        //     if (musicPlayer.paused) {
        //         musicPlayer.play()
        //             .then(() => {
        //                 playIcon.classList.add('hidden');
        //                 pauseIcon.classList.remove('hidden');
        //             })
        //             .catch(error => {
        //                 console.log('Pemutaran gagal:', error);
        //             });
        //     } else {
        //         musicPlayer.pause();
        //         playIcon.classList.remove('hidden');
        //         pauseIcon.classList.add('hidden');
        //     }
        // });

        // Create a global object for scroll direction that can be accessed by Alpine
        let lastScrollY;
        window.alpineScrollDirection = {
            isScrollingUp: false
        };

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

        // copy button
        document.querySelectorAll('[data-copy-button]').forEach(button => {
            button.addEventListener('click', function() {
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
    </script>
</x-layouts.app>
