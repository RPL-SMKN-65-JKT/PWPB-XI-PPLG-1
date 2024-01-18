<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Dhafin Portofolio</title>

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
            class="bg-transparent bg-[#b6895b] absolute top-0 left-0 flex w-full items-center z-10"
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
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Beranda</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#about"
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Tentang Saya</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#portofolio"
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Portfolio</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#clients"
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Clients</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#blog"
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Blog</a
                                    >
                                </li>
                                <li class="group">
                                    <a
                                        href="#contact"
                                        class="text-base text-dark hover:translate-y-[-3px] hover:translate-x-[-5px] duration-300 py-2 mx-8 flex group-hover:text-coffe"
                                        >Contact</a
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section id="home" class="pt-36 bg-[#b6895b]">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 z-999 lg:w-1/2">
                        <h1
                            class="text-base font-semibold text-secondary md:text-xl"
                        >
                            Halo semua👋, saya<span
                                class="text-4xl font-bold block text-black"
                                >Muhammad Dhafin Haron</span
                            >
                        </h1>
                        <h2
                            class="font-medium text-secondary text-lg mb-5 lg:text-2xl"
                        >
                            Programmer |
                            <span class="text-dark font-semibold">Student</span>
                        </h2>
                        <p class="font-medium text-lg text-secondary mb-10">
                            Web ini berisi hal-hal mengenai diri saya!
                        </p>
                        <a
                            href="#contact"
                            class="py-4 px-8 bg-coffe rounded-full hover:opacity-80 duration-300 hover:shadow-lg"
                            >Hubungi Saya</a
                        >
                    </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="relative lg:mt-10 lg:ml-20">
                            <img
                                src=" {{ asset('assets/img/halo.png') }} "
                                alt="Dhafin Haron"
                                class="rounded-full mx-auto grayscale opacity-60 hover:grayscale-0 hover:opacity-100 duration-500"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#fff"
                    fill-opacity="1"
                    d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,202.7C672,203,768,117,864,101.3C960,85,1056,139,1152,154.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                ></path>
            </svg>
        </section>

        <section class="pt-36 pb-32" id="about">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 self-center lg:w-1/2">
                        <img
                            src=" {{ asset('assets/img/Dhafin.jpg') }}  "
                            alt="about Dhafin"
                            class="w-[380px] rounded-md mx-auto"
                        />
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <h1 class="font-bold text-3xl mb-3">Tentang Saya</h1>
                        <p
                            class="text-lg self-end font-semibold text-secondary mr-22 lg:w-3/4 sm:mt-5 sm:w-[400px]"
                        >
                            Halo, saya Dhafin 16 tahun saya bersekolah di Smkn
                            65 jakarta, saya tinggal di Jakarta Timur dan saya
                            dua bersaudara. Hobi saya dalam keseharian adalah
                            ngoding dan bermain basket mimpi saya di masa depan
                            bisa menjadi seorang programmer sukses dan bisa
                            membahagiakan keluarga. ikuti media sosial saya di
                            bawah ini ya!
                        </p>
                        <div class="flex items-center mt-5">
                            <!-- Youtube -->
                            <a
                                href="https://youtube.com/@bigblacks6596/featured"
                                target="_blank"
                                class="h-9 w-9 mr-3 border hover:bg-coffe text-slate-300 hover:border-coffe hover:text-white border-slate-300 rounded-full flex justify-center items-center"
                            >
                                <svg
                                    role="img"
                                    width="20"
                                    class="fill-current"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                                    />
                                </svg>
                            </a>
                            <a
                                href="https://www.instagram.com/dhafinharon/?hl=id"
                                target="_blank"
                                class="h-9 w-9 mr-3 border hover:bg-coffe text-slate-300 hover:border-coffe hover:text-white border-slate-300 rounded-full flex justify-center items-center"
                            >
                                <svg
                                    role="img"
                                    width="20"
                                    class="fill-current"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                                    />
                                </svg>
                            </a>
                            <a
                                href=""
                                target="_blank"
                                class="h-9 w-9 mr-3 border hover:bg-coffe text-slate-300 hover:border-coffe hover:text-white border-slate-300 rounded-full flex justify-center items-center"
                            >
                                <svg
                                    role="img"
                                    width="20"
                                    class="fill-current"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>Twitter</title>
                                    <path
                                        d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"
                                    />
                                </svg>
                            </a>
                            <a
                                href=""
                                target="_blank"
                                class="h-9 w-9 mr-3 border hover:bg-coffe text-slate-300 hover:border-coffe hover:text-white border-slate-300 rounded-full flex justify-center items-center"
                            >
                                <svg
                                    role="img"
                                    width="20"
                                    class="fill-current"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>TikTok</title>
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                                    />
                                </svg>
                            </a>
                            <a
                                href=""
                                target="_blank"
                                class="h-9 w-9 mr-3 border hover:bg-coffe text-slate-300 hover:border-coffe hover:text-white border-slate-300 rounded-full flex justify-center items-center"
                            >
                                <svg
                                    role="img"
                                    width="20"
                                    class="fill-current"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>Facebook</title>
                                    <path
                                        d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-36 pb-16 bg-[#b6895b]" id="portofolio">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h2 class="text-lg text-coffe mb-2 font-semibold">
                            Portofolio
                        </h2>
                        <h4
                            class="text-3xl font-bold text-dark mb-4 lg:text-4xl"
                        >
                            Project Terbaru
                        </h4>
                        <p
                            class="text-md font-medium lg:text-lg text-secondary"
                        >
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Deleniti, et quo quos expedita inventore aut!
                        </p>
                    </div>
                </div>
                <div
                    class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto"
                >
                    <div class="mb-12 p-4 md:w-1/2">
                        <div
                            class="rounded-md shadow-md overflow-hidden bg-white"
                        >
                            <img
                                src=" {{ asset('assets/img/bk.png') }} "
                                alt=""
                            />
                            <h1
                                class="text-2xl font-semibold text-black mb-3 mt-5"
                            >
                                Landing Page
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Deserunt est pariatur earum
                                accusamus ratione amet!
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div
                            class="rounded-md shadow-md overflow-hidden bg-white"
                        >
                            <img
                                src=" {{ asset('assets/img/bk.png') }} "
                                alt=""
                            />
                            <h1
                                class="text-2xl font-semibold text-black mb-3 mt-5"
                            >
                                Landing Page
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Deserunt est pariatur earum
                                accusamus ratione amet!
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div
                            class="rounded-md shadow-md overflow-hidden bg-white"
                        >
                            <img
                                src=" {{ asset('assets/img/bk.png') }} "
                                alt=""
                            />
                            <h1
                                class="text-2xl font-semibold text-black mb-3 mt-5"
                            >
                                Landing Page
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Deserunt est pariatur earum
                                accusamus ratione amet!
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div
                            class="rounded-md shadow-md overflow-hidden bg-white"
                        >
                            <img
                                src=" {{ asset('assets/img/bk.png') }} "
                                alt=""
                            />
                            <h1
                                class="text-2xl font-semibold text-black mb-3 mt-5"
                            >
                                Landing Page
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Deserunt est pariatur earum
                                accusamus ratione amet!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('assets/img/js/script.js') }} "></script>
    </body>
</html>
