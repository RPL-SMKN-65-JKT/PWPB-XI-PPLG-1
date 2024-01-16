<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        @vite('resources/css/app.css')
    </head>
    <body>
        <header
            class="bg-transparent fixed top-0 left-0 flex w-full items-center z-10"
        >
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a
                            href="#home"
                            class="font-bold text-lg text-dark block py-6"
                            >My Portfolio</a
                        >
                    </div>
                    <div class="flex items-center px-4">
                        <button
                            id="hamburger-menu"
                            name="hamburger-menu"
                            type="button"
                            class="block absolute right-4 lg:hidden"
                        >
                            <span
                                class="hamburger-line origin-top-left transition duration-300 ease-in-out"
                            ></span>
                            <span
                                class="hamburger-line transition duration-300 ease-in-out"
                            ></span>
                            <span
                                class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"
                            ></span>
                        </button>
                        <nav
                            id="nav-menu"
                            class="hidden absolute max-w-[250px] rounded-lg bg-white w-full py-5 shadow-lg right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
                        >
                            <ul class="block lg:flex">
                                <li class="group">
                                    <a
                                        href="#home"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Beranda</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#about"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Tentang Saya</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#portfolio"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Portfolio</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#clients"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Clients</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#blog"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Blog</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#contact"
                                        class="text-base text-dark py-2 mx-8 flex group-hover:text-coffe"
                                        >Contact</a
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section id="home" class="pt-36 bg-[#ffbb7f]">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 z-999 lg:w-1/2">
                        <h1
                            class="text-base font-semibold text-slate-500 md:text-xl"
                        >
                            Halo semua , saya
                            <span class="text-4xl font-bold block text-black"
                                >Muhammad Dhafin Haron Wdadsndiansib</span
                            >
                        </h1>
                        <h2
                            class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl"
                        >
                            Programmer &
                            <span class="text-dark font-semibold">Student</span>
                        </h2>
                        <p class="font-medium text-secondary mb-10">
                            Web ini berisi hal-hal mengenai diri saya!
                        </p>
                    </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="relative lg:mt-10 lg:ml-20">
                            <img
                                src=" {{ asset('assets/img/halo.png') }} "
                                alt="Dhafin Haron"
                                class="sm:w-[200px] lg:w-[400px] rounded-full mx-auto"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,202.7C672,203,768,117,864,101.3C960,85,1056,139,1152,154.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                ></path>
            </svg>
        </section>

        <section class="pt-36 mb-32">
            <div class="container">
                <div class="w-full">
                    <h1>Tentang Saya</h1>
                </div>
            </div>
        </section>
    </body>
</html>
