<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets//css/Dimas_porto.css') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">



</head>

<body>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-gray-800"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto sm:bg-gray-800 dark:bg-gray-800 text-white">
            <ul class="space-y-2 font-medium text-white">
                <li class="text-white">
                    <a href="#profile"
                        class="flex items-center p-2 sm:text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="user" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Profile</span>
                    </a>
                </li>
                <li class="text-white">
                    <a href="#skills"
                        class="flex text-white items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="book-open">
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white">Skills</span>
                    </a>
                </li>
                <li>
                    <a href="#project"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="folder">
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white">Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#hobbys"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="dribbble">
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white">Hobbys</span>
                    </a>
                </li>
                <li>
                    <a href="#music"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="music">
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white">Musics</span>
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" data-feather="mail">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap text-white">Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="sm:ml-64">
        <!-- component -->
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet"
            href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <div id="profile" class="profile-page lg:-mt-12 md:-mt-0">
            <section class="relative block h-500-px">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('assets//img/smkn.jpeg');
          ">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                    style="transform: translateZ(0px)">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <section class="relative py-1 bg-blueGray-200">
                <div class="container mx-auto px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                        <div class="px-6">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                    <div class="relative">
                                        <img alt="..." src="{{ url('assets//img/pas.jpg') }}"
                                            class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                    <div class="py-6 px-3 mt-32 sm:mt-0">

                                        <a class=" bg-gray-800 active:bg-slate-950 uppercase text-white font-bold hover:shadow-md shadow text-xs px-2 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150 hover:bg-gray-500"
                                            type="button" href="https://www.instagram.com/d1m.s/" target="_blank"><i
                                                data-feather="instagram">

                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                    <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                        <div class="mr-4 p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">3</span><span
                                                class="text-sm text-blueGray-400">Project</span>
                                        </div>
                                        <div class="mr-4 p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">246</span><span
                                                class="text-sm text-blueGray-400">Followers</span>
                                        </div>
                                        <div class="lg:mr-4 p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">0</span><span
                                                class="text-sm text-blueGray-400">Posts</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-12">
                                <h3 class="text-4xl font-semibold leading-normal text-blueGray-700">
                                    Dimas Abimanyu
                                </h3>
                                <div class="mb-6 text-blueGray-600 italic">
                                    <i class=" mr-2 text-lg text-blueGray-400"></i>programmer
                                </div>
                                <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                    <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                    Kota Bekasi, Bekasi Barat
                                </div>
                                <div class="mb-2 text-blueGray-600">
                                    <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>SMKN 65 JAKARTA
                                </div>
                            </div>
                            <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full lg:w-9/12 px-4">
                                        <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                            Saya lahir di Jakarta, Indonesia pada tanggal 21
                                            februari 2007. saya adalah pelajar dari SMK Negeri 65 Jakarta dengan
                                            jurusan
                                            Pengembangan Perangkat Lunak dan GIM. Saya baru mempelajari web
                                            development dan saya berminat untuk menjadi front end developer.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section id="skills" class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                    Skills
                </h1>
                <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    Beberapa kemampuan yang saya kuasai.
                </p>
                <div class="text-center grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">

                    <a
                        class="lg:ml-24 block max-w-sm p-6 bg-white border border-gray-500 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800">
                        <i class="devicon-html5-plain text-5xl"></i>
                        <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">HTML</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">HyperText Markup Language adalah bahasa
                            markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet.</p>
                    </a>

                    <a
                        class=" block max-w-sm p-6 bg-white border border-gray-500 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800">
                        <i class="devicon-css3-plain text-5xl"></i>
                        <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CSS
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Cascading Style Sheet merupakan aturan
                            untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan
                            seragam.</p>
                    </a>

                    <a
                        class="lg:ml-24 block max-w-sm p-6 bg-white border border-gray-500 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800">

                        <i class="devicon-java-plain text-5xl"></i>

                        <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">JAVA
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Java adalah bahasa pemrograman yang
                            dapat dijalankan di berbagai komputer termasuk telepon genggam.</p>
                    </a>

                    <a
                        class="block max-w-sm p-6 bg-white border border-gray-500 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800">

                        <i class="devicon-mysql-plain text-5xl"></i>

                        <h5 class=" mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">MYSQL
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">MySQL adalah sebuah perangkat lunak
                            sistem manajemen basis data SQL atau DBMS yang multialur, multipengguna, dengan sekitar 6
                            juta instalasi di seluruh dunia.</p>
                    </a>

                </div>
            </div>
        </section>
        <section id="project" class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                    Projects
                </h1>
                <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    Projek yang sudah saya selesaikan
                </p>


                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 group"
                        style="background-image:url('assets//img/Porto.png')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">My First Portofolio Web</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 group"
                        style="background-image:url('assets//img/filmlist.png')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">My Favorite Film List Web
                            </h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 group"
                        style="background-image:url('assets//img/musicplayer.png')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">Music Player Web</h2>
                            <a href="https://silverdazt.github.io" target="_blank"
                                class="mt-2 text-lg tracking-wider text-blue-400 uppercase hover:text-white ">Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="hobbys" class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                    Hobbys
                </h1>
                <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    Kegiatan yang suka saya lakukan
                </p>
                <div
                    class="lg:ml-10 lg:mr-10 lg:flex sm:grid-cols-2 gap-8 sm:mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3 sm:grid">
                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 w-52 group"
                        style="background-image:url('assets//img/basketball.jpeg')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">Saya sangat suka bermain basket
                                dan saya bergabung dalam tim basket sekolah saya</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Basketball</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 w-52 group"
                        style="background-image:url('assets//img/music.jpeg')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">Saya suka mendengarkan musik
                                saat mengerjakan sesuatu
                            </h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Music</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 w-52 group"
                        style="background-image:url('assets//img/movie.jpeg')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">Saya suka menonton film saat
                                ada waktu luang</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Movie</p>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-cover bg-center rounded-lg cursor-pointer h-96 w-52 group"
                        style="background-image:url('assets//img/game.jpeg')">
                        <div
                            class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                            <h2 class="mt-4 text-xl font-semibold text-white capitalize">Saya juga suka bermain game di
                                pc dan console</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Game</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="music" class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                    Musics
                </h1>
                <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    Music favorit saya
                </p>
                <div class="content-center mt-5">

                    <iframe style="border-radius:12px"
                        src="https://open.spotify.com/embed/playlist/1Y4nLo0hEyVgxCCEXSxaY8?utm_source=generator&theme=0"
                        width="100%" height="352" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        loading="lazy"></iframe>



                </div>
            </div>
        </section>
        <section id="contact" class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl">
                    Contact
                </h1>
                <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    Hubungi saya dengan kontak di bawah ini
                </p>
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12 mt-20">
                    <div class="flex flex-wrap">
                        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                            <div class="flex items-start">
                                <div class="shrink-0">
                                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-6 grow">
                                    <p class="mb-2 font-bold text-gray-800">
                                        Phone Number
                                    </p>
                                    <p class="text-neutral-500 text-gray-800">
                                        Dimas Abimanyu
                                    </p>
                                    <p class="text-neutral-500 text-gray-800">
                                        +62 812 8697 7603
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                            <div class="flex items-start">
                                <div class="shrink-0">
                                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                        <svg data-feather="mail" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-6 grow">
                                    <p class="mb-2 font-bold text-gray-800">
                                        Email
                                    </p>
                                    <p class="text-neutral-500 text-gray-800">
                                        dimasabimanyu1099@gmail.com
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                            <div class="align-start flex">
                                <div class="shrink-0">
                                    <div class="inline-block rounded-md bg-primary-100 p-4 text-primary">
                                        <svg data-feather="instagram" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-6 grow">
                                    <p class="mb-2 font-bold text-gray-800">Instagram</p>
                                    <p class="text-neutral-500 text-gray-800">
                                        @d1m.s
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>



    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        feather.replace();
    </script>

    <script>
        // grap everything we need
        const btn = document.querySelector(".mobile-menu-button");
        const sidebar = document.querySelector(".sidebar");

        // add event listener
        btn.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>

</html>