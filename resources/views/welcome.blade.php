<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Portofolio</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#141A1A] overflow-x-hidden">
    <!-- header -->
    <header
      class="fixed top-0 right-0 left-0 md:py-1 transition-all duration-300"
    >
      <nav
        class="max-w-7xl mx-auto bg-gray-800 md:bg-transparent p-5 order-[10001]"
      >
        <div class="flex items-center justify-between">
          <a
            href="/"
            class="text-white font-bold text-lg flex items-center gap-3"
            >Portfolio</a
          >
          <!-- only for large device -->
          <div class="hidden md:flex space-x-10">
            <a href="#home" class="text-[#0872BF] hover:text-gray-300">Home</a>
            <a href="#skills" class="text-white hover:text-gray-300"
              >Skills</a
            >
            <a href="#projects" class="text-white hover:text-gray-300">Projects</a>
          </div>
          <!-- menu btn, only disply on mobile -->
          <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white text-2xl">
              <i class="bx bx-menu"></i>
            </button>
          </div>
        </div>

        <!-- mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
          <a href="#home" class="block text-white py-2 mt-3 hover:bg-gray-700"
            >Home</a
          >
          <a href="#skills" class="block text-white py-2 hover:bg-gray-700"
            >Skills</a
          >
          <a href="#projects" class="block text-white py-2 hover:bg-gray-700"
            >Projects</a
          >
        </div>
      </nav>
    </header>

    <!-- banner section -->
    <section class="max-w-7xl mx-auto px-5 my-12" id="home">
      <div
        class="flex md:flex-row flex-col justify-between items-center text-white gap-4 py-10"
      >
        <div class="md:w-1/2">
          <p class="text-xl font-medium mb-4">
            Hello, <span class="text-[#0872BF]">I'm</span>
          </p>
          <h1 class="font-bold text-4xl tracking-[3.22px] mb-5">Tsabita Nasyatatia</h1>
          <p class="text-2xl font-montserrat mb-5">Web Developer</p>
          <p class="text-xl mb-12 md:w-3/4 text-justify leading-8">
            saya berumur 17 tahun bersekolah di SMKN 65 Jakarta, dengan jurusan Pengembangan Perangkat Lunak dan GIM
          </p>
          <a href="https://wa.me/6281311990747">
          <button
            class="py-4 px-10 rounded-md bg-[#0872BF] text-white font-bold"
          >
            Let's Talk
          </button>
          </a>
          <!-- social btn -->
          <div class="mt-12 mb-8 flex gap-4 items-center">
            <p>Check out My:</p>
            <div class="flex space-x-3">
              <a href="https://www.instagram.com/tsbtansya_/"
                ><img src="{{ URL::to('/assets/img/instagram.svg') }}" alt="" class="w-8 h-8"
              /></a>
              <a href="https://github.com/tsbtansya"
                ><img src="{{ URL::to('/assets/img/github.webp') }}" alt="" class="w-8 h-8 rounded-full bg-blue-800 text-blue-900"
              /></a>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 order-first md:order-none">
          <img
            src="https://cdn3.iconfinder.com/data/icons/web-development-168/512/Woman_Web_Developer2.png"
            alt=""
            class="md:ml-20 w-3/4"
          />
        </div>
      </div>
    </section>

    <!-- skills section -->
    <section class="max-w-7xl mx-auto px-5 my-6 text-white" id="skills">
      <div class="text-center">
        <p class="mb-3 font-montserrat font-medium">My Skills</p>
        <h3 class="text-[#0872BF] text-3xl font-bold mb-16">Inilah beberapa skill saya</h3>
      </div>
      <!-- skills cards -->
      <div
        class="my-16 flex flex-col md:flex-row justify-around items-center gap-12"
      >
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-[#0872BF] shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
            src="{{ URL::to('/assets/img/html.png') }}"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">HTML</h5>
          <p class="text-justify">
          Saya cukup ahli HTML, skill saya sudah cukup memumpuni untuk membuat website sederhana dengan tag tag sederhana HTML.
          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-[#0872BF] shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
          src="{{ URL::to('/assets/img/css.png') }}"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">CSS</h5>
          <p class="text-justify">
          Saya cukup ahli untuk menggunakan attribut pada styling CSS, skill saya sudah cukup untuk membuat tampilan website yang lebih menarik.

          </p>
        </div>
        <div
          class="w-[354px] px-5 py-8 rounded-lg border border-[#0872BF] shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img
            src="{{ URL::to('/assets/img/java.png') }}"
            alt=""
            class="w-[196px] mb-12 mx-auto"
          />
          <h5 class="text-center my-5 text-xl">JAVA</h5>
          <p class="text-justify">
          Saya lumayan bisa bahasa JAVA, skill saya sudah cukup untuk membuat program-program sederhana hingga menengah pada bahasa JAVA.

          </p>
        </div>
      </div>
    </section>

    <!-- projects -->
    <section class="px-5 my-32 mx-auto max-w-7xl" id="projects">
      <div class="text-center text-white">
        <h3 class="text-3xl font-bold mb-5">
          Recent <span class="text-[#0872BF]">Projects</span>
        </h3>
        <p class="mb-6 md:w-3/4 mx-auto">
         Ini adalah beberapa projek yang pernah saya buat menggunakan HTML dan CSS sederhana
        </p>
      </div>
      <div
        class="flex md:flex-row flex-col items-center justify-between gap-8 my-20"
      >
        <div
          class="border border-[#0872BF] shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5 md:p-0"
        >
          <img src="{{ URL::to('/assets/img/projek4.png') }}" alt="" class="p-5 w-full" />
        </div>
        <div
          class="border border-[#0872BF] shadow-xl shadow-[#5dadec3b] md:w-[741px] md:h-96 mx-auto rounded-2xl p-5"
        >
          <img src="{{ URL::to('/assets/img/projek2.png') }}" alt="" class="w-full p-5" />
        </div>
      </div>
    </section>



    <footer class="max-w-7xl mx-auto px-5 my-16">
      <h4 class="text-2xl text-white pt-12 mb-12">Portfolio</h4>
      <div
        class="text-white md:ml-16 flex flex-col md:flex-row justify-between md:items-center gap-6"
      >
        <div class="md:w-1/3 md:pl-10">
          <h5 class="mb-3">Content</h5>
          <a href="#" class="block my-2 text-sm text-slate-300">About Us</a>
          <a href="#skills" class="block my-2 text-sm text-slate-300"
            >Skills</a
          >
          <a href="#projects" class="block my-2 text-sm text-slate-300">Projects</a>
        </div>

        <div class="md:w-1/3">
          <h5 class="mb-3">Resources</h5>
          <a href="#" class="block my-2 text-sm text-slate-300"
            >Privacy Policy</a
          >
          <a href="#" class="block my-2 text-sm text-slate-300"
            >Terms and Condition</a
          >
          <a href="#" class="block my-2 text-sm text-slate-300">Blog</a>
          <a href="#" class="block my-2 text-sm text-slate-300">Contact Us</a>
        </div>

        <div class="md:w-1/3">
          <h5 class="mb-5">Subscribe to our Newsletter</h5>
          <div class="relative">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter your Email"
              class="bg-[#2B2E3C] py-5 pl-5 rounded-lg"
            />
            <input
              type="submit"
              value="Subscribe"
              class="bg-[#0872BF] py-4 px-8 rounded-lg absolute left-44 top-1"
            />
          </div>
        </div>
      </div>
    </footer>

    <!-- script tags -->
    <script src="src/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="src/review.js"></script>
  </body>
</html>
