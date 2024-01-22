<!doctype html>
<html>
<head>
    <title>Portofolio Ahmad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
    /* Add your existing styles here */

    .transition-div {
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .transition-div.show {
      opacity: 1;
    }
  </style>
</head>
<body class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]" style="background-repeat: no-repeat;">
    

<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img class="w-10 h-10 rounded-full" src="{{ asset('image/ojan.jpg') }}" alt="Rounded avatar">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Portofolio</span>
    </a>
    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#project" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Project</a>
        </li>
        <li>
          <a href="#contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<hr>

<div class="transition-div text-center" id="home">
  <h1 style="font-weight: 700" class="text-center">
    Halo, Welcome to My Portfolio Web
  </h1>
  <p class="text-center font-semibold">Made By Ahmad Fauzan M. Anam</p>
</div>

    

<div class="w-full mt-5 ml-4 mr-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="me-2">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">About Me</button>
        </li>
        <li class="me-2">
            <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Academy</button>
        </li>
    </ul>
    <div id="defaultTabContent">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Hi, My Name is Ahmad Fauzan Misbakhul Anam</h2>
            <p class="mb-3 text-gray-500 dark:text-gray-400">Halo, nama saya Ahmad Fauzan. Saya adalah siswa kelas XI PPLG 1 di SMKN 65 Jakarta. Saya memiliki ketertarikan yang besar terhadap dunia pemrograman dan coding. Saya percaya bahwa dengan pemrograman, kita bisa menciptakan solusi untuk berbagai masalah dan membuat dunia menjadi tempat yang lebih baik. <br>

Di luar sekolah, saya memiliki berbagai hobi dan minat. Saya adalah penggemar berat game dan anime, dua bentuk media yang tidak hanya menghibur, tetapi juga sering memberikan inspirasi dan wawasan baru bagi saya. Saya juga menikmati olahraga, yang membantu saya tetap bugar dan sehat. <br>

Namun, jangan salah paham, minat saya tidak terbatas pada hal-hal tersebut saja. Saya selalu terbuka untuk belajar dan mencoba hal-hal baru. Saya percaya bahwa setiap pengalaman dan pengetahuan baru membantu saya tumbuh dan berkembang sebagai individu.
</p>
        </div>
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
          <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Riwayat pendidikan</h2>
          <!-- List -->
          <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
          <li class="mb-4">
            <h3 class="text-xl font-semibold">Sekolah Dasar</h3>
            <p class="leading-tight">Nama Sekolah: SDN 06 Cipinang Muara</p>
          </li>
          <li class="mb-4">
            <h3 class="text-xl font-semibold">Sekolah Menengah Pertama</h3>
            <p class="leading-tight">Nama Sekolah: SMPN 255 Jakarta</p>
          </li>
          <li class="mb-4">
            <h3 class="text-xl font-semibold">Sekolah Menengah Kejuruan</h3>
            <p class="leading-tight">Nama Sekolah: SMK 65 Jakarta</p>
         </li>
          </ul>
        </div>

        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
            <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
            </dl>
        </div>
    </div>
</div>
    
    <h1 style="font-weight: 700" class="text-center">Skill Skill</h1>

    <br>
    <br>
    <div class="skill mx-4">
    <div class="mb-2">HTML</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="80"></div>
    </div>
    <div class="mb-2 mt-4">CSS</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="80"></div>
    </div>
    <div class="mb-2 mt-4">JavaScript</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="50"></div>
    </div>
    <div class="mb-2 mt-4">Laravel</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="20"></div>
    </div>
    <div class="mb-2 mt-4">Python</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="20"></div>
    </div>
    <div class="mb-2 mt-4">MySQL</div>
    <div class="w-full h-2 bg-gray-200">
        <div class="h-2 bg-green-500 progress-bar" style="width: 0%;" data-percent="35"></div>
    </div>
  </div>  
  </div>

  <h1 style="font-weight: 700" class="text-center" id="project">Project</h1>
    <br>
  <div class="card-container mx-4">
    <div class="card">
      <img src="{{ asset('image/Film Favorite.png') }}" alt="Gambar Film Fav" style="width:100%">
      <div class="container">
        <h4><b>Film Favorite Program</b></h4> 
        <p>Ini adalah sebuah web aplication dimana saya menampilkan Film-Film Favorite saya. <a href="https://github.com/RPL-SMKN-65-JKT/PWPB-XI-PPLG-1/tree/main/Ahmad%20Fauzan%20(4)%20XI%20PPLG1/Porto_AhmadFauzan(4)"
        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Github <-</a></p> 
      </div>
    </div>

    <div class="card">
      <img src="{{ asset('image/Screenshot (2).png') }}" alt="Gambar Portofolio" style="width:100%">
      <div class="container">
        <h4><b>Portofolio Program</b></h4> 
        <p>Ini adalah sebuah web dimana saya menampilkan Portofolio pertama saya. <a href="https://github.com/RPL-SMKN-65-JKT/PWPB-XI-PPLG-1/tree/main/Ahmad%20Fauzan%20(4)%20XI%20PPLG1/Porto_AhmadFauzan(4)"
        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Github <-</a></p> 
      </div>
    </div>
  </div>

  <div class="p-4 bg-white rounded-lg">
    <h1 class="mb-4 text-xl font-bold font-weight:700 text-center" id="contact">My Contact</h1>
    <div class="flex flex-wrap justify-center">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="mb-2 text-lg font-semibold">Email</h3>
                <p>fauzananamkc@gmail.com</p>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="mb-2 text-lg font-semibold">Telepon</h3>
                <p>+628 7741 6025 09</p>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
            <div class="border border-gray-200 rounded-lg p-4">
                <h3 class="mb-2 text-lg font-semibold">Alamat</h3>
                <p>Jakarta, Indonesia</p>
            </div>
        </div>
    </div>
</div>



    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
     <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Zaweb. All Rights Reserved.
      </span>
      <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#contact" class="hover:underline">Contact</a>
        </li>
      </ul>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script>
     // Add a script to add the 'show' class after a delay
    document.addEventListener('DOMContentLoaded', function() {
    var transitionDiv = document.querySelector('.transition-div');
    setTimeout(function() {
      transitionDiv.classList.add('show');
    }, 700); // Adjust the delay in milliseconds (0.5s in this case)
    });
    </script>
    <script>
     window.onload = function() {
      var bars = document.querySelectorAll('.progress-bar');
      bars.forEach(function(bar) {
        var percentage = bar.dataset.percent;
        var currentWidth = 0;
        var interval = setInterval(function() {
            if (currentWidth >= percentage) {
                clearInterval(interval);
            } else {
                currentWidth++;
                bar.style.width = currentWidth + '%';
            }
        }, 30);
      });
    };
    </script>
</body>

</html>
