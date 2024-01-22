<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Humairo Portfolio Laravel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="{{ url('assets//css/style.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Onest:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" >
  <link rel="stylesheet" href="css/style.css" >

</head>
<body class="font-nunito">
    <!-- into section --
      <!-- navbar -->
      <nav class="w-full fixed top-0 bg-slate-900 z-10 dark:bg-slate-900">
        <div class="container mx-auto py-5 flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img class="w-8" src="./img/logo.png" alt="" />
            <span class="text-2xl font-bold text-indigo-900 dark:text-white"
              >Humairo Azzra</span
            >
          </div>
          <ul
            class="hidden md:flex space-x-10 text-gray-600 dark:text-gray-100 font-bold text-sm uppercase"
          >
            <li class="hover:text-gray-500">
              <a href="#about">about me</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#services">Skills</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#works">Portfolio</a>
            </li>
            <li class="hover:text-gray-500">
              <a href="#contact">contact</a>
            </li>
          </ul>
          <img
            id="moon"
            src="./img/moon.png"
            class="hidden md:block w-5 cursor-pointer"
            alt=""
          />
          <div id="hamburger" class="space-y-1 md:hidden cursor-pointer z-20">
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
          </div>
          <ul
            id="menu"
            class="hidden bg-indigo-900 absolute left-0 top-0 w-full p-10 rounded-b-3xl space-y-10 text-white text-center"
          >
            <li>
              <a id="hLink" href="#">homepage</a>
            </li>
            <li>
              <a id="hLink" href="#about">about me</a>
            </li>
            <li>
              <a id="hLink" href="#services">services</a>
            </li>
            <li>
              <a id="hLink" href="#works">works</a>
            </li>
            <li>
              <a id="hLink" href="#contact">contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- intro content -->
    <!-- about -->
    <div id="about" class="px-10 dark:bg-slate-900">
      <div
        class="container mx-auto py-40 flex flex-col-reverse lg:flex-row items-center gap-20"
      >
        <!-- left -->
        <div class="relative">
          <img
            class="h-1/4 absolute top-0 left-0 -z-10"
            src="{{ URL::to('/assets/img/profil.png') }}"
            alt=""
          />
          <div class="h-full rounded-full overflow-hidden">
            <img  src="{{ URL::to('/assets/img/profil.png') }}" alt="" />
          </div>
        </div>
        <!-- right -->
        <div class="my-auto flex flex-col gap-3">
          <h1 class="text-indigo-600 font-bold">ABOUT ME</h1>
          <h1 class="text-3xl font-medium dark:text-white">Siti Humairo Azzra</h1>
          <p class="text-gray-400">
          Hallo👋, Nama saya Siti Humairo Azzra, saya berumur 16 tahun dan saya merupakan pelajar dari sekolah SMK Negri 65 Jakarta dengan jurusan Pengembang Perangkat Lunak dan GIM
          </p>
          <h2 class="text-gray-400 font-medium">HTML</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-5/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">Javascript</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-4/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">CSS</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-5/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- services -->
    <div id="services" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">SKILL</h1>
          <h1 class="text-3xl dark:text-white">WEB AND PROGRAMMING LANGUAGE</h1>
          <p class="w-1/2 text-center text-gray-400">
            My approach to website design is to create a website that
            strengthens your company’s brand while ensuring ease of use and
            simplicity for your audience.
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="{{ URL::to('/assets/img/html.png') }}" alt="" />
            <h1 class="font-medium text-lg dark:text-white">HTML</h1>
            <p class="text-gray-400">
            HyperText Markup Language adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href="https://www.w3schools.com/html/"
              >Read More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="{{ URL::to('/assets/img/css.png') }}" alt="" />
            <h1 class="font-medium text-lg dark:text-white">CSS</h1>
            <p class="text-gray-400">
            Cascading Style Sheet merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href="https://www.w3schools.com/css/"
              >Read More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="{{ URL::to('/assets/img/java.png') }}" alt="" />
            <h1 class="font-medium text-lg dark:text-white">JAVA</h1>
            <p class="text-gray-400">
            Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam. Bahasa ini awalnya dibuat oleh James Gosling saat masih bergabung di Sun Microsystems, yang saat ini merupakan bagian dari Oracle dan dirilis tahun 1995
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href="https://id.wikipedia.org/wiki/Java"
              >Read More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="{{ URL::to('/assets/img/mysql.png') }}" alt="" />
            <h1 class="font-medium text-lg dark:text-white">MYSQL</h1>
            <p class="text-gray-400">
            MySQL adalah sebuah perangkat lunak sistem manajemen basis data SQL atau DBMS yang multialur, multipengguna, dengan sekitar 6 juta instalasi di seluruh dunia.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href="https://id.wikipedia.org/wiki/MySQL"
              >Read More</a
            >
          </div>
          <!-- card -->
      </div>
    </div>
    <!-- works -->
    <div id="works" class="py-40 dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">PORTFOLIO</h1>
          <h1 class="text-3xl dark:text-white">Works & Projects</h1>
          <p class="w-1/2 text-center text-gray-400">
            berikut adalah beberapa project dan web design yang sudah pernah saya buat
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
          <!-- card -->
          <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
          >
            <img src="{{ URL::to('/assets/img/project.png') }}" />
          </div>
          <!-- card -->
          <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
          >
            <img src="{{ URL::to('/assets/img/project2.png') }}" />
          </div>
          <!-- card -->
          <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
          >
            <img src="{{ URL::to('/assets/img/project3.png') }}" />
          </div>
          <!-- card -->
          <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
          >
            <img src="{{ URL::to('/assets/img/porto5.png') }}" />
          </div>
          <!-- card -->
          <div
            class="w-full md:w-5/12 lg:w-1/5 shadow-xl rounded-lg my-3 md:my-10 m-1 transition-all hover:scale-110"
          >
            <img src="{{ URL::to('/assets/img/porto6.png') }}" />
          </div>
          <!-- card -->
        </div>
      </div>
    </div>

    <!-- contact -->
    <div id="contact" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">CONTACT</h1>
          <h1 class="text-3xl dark:text-white">Have a Question?</h1>
          <p class="w-1/2 text-center text-gray-400">
              Contact saya dengan mengisi form dibawah ini
          </p>
        </div>
        <!-- bottom -->
        <form class="mt-5 p-8 flex flex-col gap-5 items-center">
          <input
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="text"
            placeholder="Name Surname"
          />
          <input
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="email"
            placeholder="Email"
          />
          <textarea
            class="p-2 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            cols="30"
            rows="10"
            placeholder="Message..."
          ></textarea>
          <button
            class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer"
            href="https://wa.me/6287872525755"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
    <!-- footer -->
    <div class="w-full bg-gray-800">
      <div class="container mx-auto py-5 flex items-center justify-between">
        <div class="flex items-center gap-2">
          <img class="w-8" src="./img/logo.png" alt="" />
          <span class="text-2xl font-bold text-white">Humairo Azzra.</span>
        </div>
        <span class="hidden md:block font-medium text-white"
          >© 2022 copyright. Design with ♥️ by Humairo.</span
        >
        <div class="flex gap-2">
          <img class="w-4 cursor-pointer" src="./img/facebook.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/instagram.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/twitter.png" alt="" />
          <img class="w-4 cursor-pointer" src="./img/linkedin.png" alt="" />
        </div>
      </div>
    </div>
    <script src="./app.js"></script>
    <script src="./autotyping.js"></script>
    <script src="{{ url('assets//js/app.js') }}"></script>
    <script src="{{ url('assets//js/autotyping.js') }}"></script>
  </body>

</html>