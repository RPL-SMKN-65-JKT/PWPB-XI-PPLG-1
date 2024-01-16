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
            class="bg-transparent absolute top-0 left-0 flex w-full items-center z-10"
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
                                        href="#portfolio"
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
                            Programmer &
                            <span class="text-dark font-semibold">Student</span>
                        </h2>
                        <p class="font-medium text-lg text-secondary mb-10">
                            Web ini berisi hal-hal mengenai diri saya!
                        </p>
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
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,160L48,138.7C96,117,192,75,288,96C384,117,480,203,576,202.7C672,203,768,117,864,101.3C960,85,1056,139,1152,154.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                ></path>
            </svg>
        </section>

        <section class="pt-15 pb-32" id="about">
            <div class="container">
                <h1 class="font-semibold text-3xl text-center mx-auto mb-8">
                    Tentang Saya
                </h1>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 self-center lg:w-1/2">
                        <img
                            src=" {{ asset('assets/img/Dhafin.jpg') }}  "
                            alt="about Dhafin"
                            class="w-[380px] rounded-md"
                        />
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <p
                            class="text-lg self-end font-semibold text-secondary mr-22 lg:w-3/4 sm:mt-5 sm:w-[400px]"
                        >
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Vel harum iste ad inventore consectetur minima
                            est consequuntur totam maiores. Architecto
                            voluptatem repellat, dolorum doloribus delectus
                            optio voluptatibus necessitatibus placeat officiis
                            aliquid consequuntur, quas nisi ab?
                        </p>
                        <a href="#" >
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
