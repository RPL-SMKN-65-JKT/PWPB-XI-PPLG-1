<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Muhamad Zafar Syah</title>
        <link rel="shortcut icon" href="{{ url('assets//img/icon.png') }}" type="image/x-icon">

        <!-- Style  -->
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/style.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/contact.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('assets//css/footer.css') }}" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css" />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
        @vite('resources/css/app.css')
    </head>
<body class="font-Poppins scroll-smooth overflow-x-hidden">
  <button button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="hover:animate-bounce hover:transition-all s:duration-300 hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-[#38bdf8] hover:bg-[#275468] text-white text-lg font-semibold transition-colors duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>
    <div class=" bg-[url('../../public/assets/img/wave2.jpg')] bg-no-repeat bg-center" style="top:0; position:relative;">
 <nav x-data="{ isOpen: false }" class="relative top-0 z-50 right-0 left-0 lg:bg-transparent lg:backdrop-blur-sm shadow dark:bg-gray-800 s:bg-[#121a2b] sm:backdrop-blur-sm">
    <div class="w-[100%] px-6 py-4 mx-auto s:max-w[350px]">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <a href="#">
                  <h1 class="lg:text-2xl s:text-lg lg:text-black font-bold s:text-white">Muhamad Zafar Syah</h1>
                </a>


                <div class="flex lg:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>
                
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        
                    </button>
                </div>
            </div>


            <div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 bg-black opacity-70 z-10"></div>

            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out mt-4 bg-[#141e31] shadow-md dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">

                    <a @click="isOpen = false" href="#about" class="px-3 py-2 mx-3 mt-2 lg:text-black s:text-gray-200 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 dark:hover:bg-gray-700 hover:text-yellow-300 hover:bg-gray-700 border-solid border-2 border-gray-700 lg:border-none">About</a>
                    <a @click="isOpen = false" href="#skills" class="px-3 py-2 mx-3 mt-2 lg:text-black s:text-gray-200 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 dark:hover:bg-gray-700 hover:text-yellow-300 hover:bg-gray-700 border-solid border-2 border-gray-700 lg:border-none">Skills</a>
                    <a @click="isOpen = false" href="#portfolio" class="px-3 py-2 mx-3 mt-2 lg:text-black s:text-gray-200 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 dark:hover:bg-gray-700 hover:text-yellow-300 hover:bg-gray-700 border-solid border-2 border-gray-700 lg:border-none">Portfolio</a>
                    <a @click="isOpen = false" href="#contact" class="px-3 py-2 mx-3 mt-2 lg:text-black s:text-gray-200 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 dark:hover:bg-gray-700 hover:text-yellow-300 hover:bg-gray-700 border-solid border-2 border-gray-700 lg:border-none">Contact</a>
                </div>

                <div class="flex items-center mt-4 lg:mt-0">          
                    <button type="button" class="flex items-center focus:outline-none mr-4" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full ">
                        <a href="https://www.instagram.com/zfarrrr_/">
                            <img class="object-cover w-full h-full hover:opacity-55" src="{{ URL::to('/assets/img/profil.png') }}">
                        </a>
                        </div>
                        <a href="https://www.instagram.com/zfarrrr_/">
                            <h3 class="mx-2 text-gray-400 dark:text-gray-200 lg:hidden hover:text-white">Zafar S.</h3>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="lg:pt-5 s:pt-0 s:pb-0">
    <div class="lg:container mx-auto sm:px-4 lg:pt-5 s:pt-0 flex flex-col" id="about">
      <div class="flex flex-wrap order-2 pt-5 relative">
        <div class="absolute" style="top:-466px; left:15px;">
        <a href="https://www.linkedin.com/in/zafar-syah-7b8996271/" target="_blank">
          <div class="kk shadow-sm linkin"> <i class="lni lni-linkedin"></i> </div>
          </a>  
          <a href="https://www.instagram.com/zfarrrr_" target="_blank">
          <div class="kk shadow-sm instagram"> <i class="lni lni-instagram-original"></i> </div>
          </a> 
          <a href="https://twitter.com/zafar_syah" targer="_blank">
          <div class="kk shadow-sm twitter"> <i class="lni lni-twitter"></i> </div>
          </a> 
          <a href="https://github.com/MuhamadZafarSyah/MuhamadZafarSyah" target="_blank">
          <div class="kk shadow-sm github"> <i class="lni lni-github"></i> </div>
          </a> 
        </div>
        <div class="lg:w-1/2 pr-4 pl-4 w-full mx-auto text-center text-white">
          <h1 class="font-bold lg:text-4xl s:text-3xl text-[#38bdf8]"><span class="text-black">I'm </span>Muhamad Zafar Syah</h1>
          <a id="typewriter" class=" underline text-2xl text-black decoration-blue-900 absolute lg:left-[32%] s:left-[10%]"></a>
          <p class="text-xl font-light mb-12 mt-10 text-gray-700">Front end beginner and will always develop skills until reaches the goals</p>
        </div>
      </div>
      <div class="flex flex-wrap order-1">
        <div class="lg:w-2/5 pr-4 pl-4 w-full mx-auto text-center "> <img src="{{ URL::to('/assets/img/profil.png') }}" class="max-w-full h-auto  lg:-mt-24"> </div>
      </div>
    </div>
  </div>
  </div>
</div>
<section class="my-56 h-full w-screen p-sectionPadding overflow-hidden overflow-x-hidden" id="about">
    <div class="opacity-100 transform-none">
        <h1 class="text-[#0e2431] text-7xl font-extrabold mb-8 bg-gradient-to-t from-transparent bg-clip-text text-transparent opacity-[0.3] text-center z-[-1]">About Me</h1>
        <h2 class="text-black text-[2.5em] font-bold -translate-y-20 text-center z-[1]">About Me</h2>
    </div>

    <div class="xl:max-w-sectionWidth max-w-[62.5rem] mx-auto grid lg:grid-cols-[35%_50%] lg:gap-[15%] grid-cols-1 gap-4">
        <div class="bg-[#38bdf8] lg:w-full w-fit lg:mx-0 mx-auto lg:aspect-square rounded-[1rem] grid place-items-center opacity-100 transform-none">
            <div class="shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] lg:h-[40rem] md:h-[33rem] h-[22.5rem]  rounded-[1rem] transition-all duration-300 hover:rotate-0">
                <img src="{{ URL::to('/assets/img/profil-banner.jpeg') }}" alt="About Banner" class="object-cover rounded-[1rem] h-full">
            </div>
        </div>

        <div class="flex flex-col justify-center opacity-100 transform-none">
            <div class="border-[#777777]/50 text-black lg:border-b-[2px] mb-8 lg:text-start text-center lg:mt-0 mt-6 opacity-100 transform-none">
                <h2 class="lg:text-[1.80rem] text-[1.75rem] font-semibold mb-3">Hello, I am <span class="text-[#38bdf8]">Muhamad Zafar Syah</span></h2>
                <h4 class="lg:text-xl text-xl font-semibold mb-8">A <span class="text-[#38bdf8]">Frontend Developer</span> based in <span class="text-[#38bdf8]">Indonesia</span></h4>
                <p class="text-[#777777] max-w-[85%] w-full text-base md:text-lg pb-6 font-normal lg:mx-0 mx-auto">
                Hello everyone! I am Muhammad Zafar Syah, 17 years old, I am a beginner web developer, and I really like technology and will not stop learning it, I will develop my web development skills as far as I can, I interested if there is a collaborative project that involves me in it
                </p>
            </div>

            <div class="opacity-100 transform-none">
                <a class="bg-transparent border-[#38bdf8] text-[#38bdf8] hover:bg-[#38bdf8] hover:text-white lg:px-12 px-8 py-3 text-[1em] w-fit flex items-center rounded-[10px] gap-x-4 font-bold shadow-sm px-8 lg:mx-0 mx-auto font-medium tracking-[1px] inline-block border-[2px] transition-all duration-300" href="https://wa.me/6288214367530" target="_blank">
                    Contact Me 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                      <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class=" text-white my-56" id="skils">
<div style="opacity: 1; transform: none;">
  <h2 class="text-black text-[2.5em] font-bold -translate-y-10 text-center z-[1]">My Skills</h2>
</div> 
<div class="xl:max-w-sectionWidth max-w-[62.5rem] mx-auto flex-col gap-y-20 lg:h-[40rem] s:h-[65rem] flex justify-start">
  <div class="grid lg:grid-cols-[65%_25%] grid-cols-1 lg:gap-[10%] gap-10 justify-start" style="opacity: 1; transform: none;">
    <div class="bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-black shadow-cardShadow p-10 grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-8 lg:w-full w-[80%] lg:mx-0 mx-auto place-items-center justify-start rounded-lg lg:order-1 order-2 transition-all duration-300 hover:shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)]">
    <div class="flex flex-col justify-start items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
        <svg stroke="#6A59D1" fill="#6A59D1" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-[2rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <title></title>
          <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"></path>
        </svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">HTML</h3>
        <h4 class="text-light font-normal">Advanced</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg stroke="currentColor" fill="#6A59D1" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-[2rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"></path></svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">CSS</h3>
        <h4 class="text-light font-normal">Advanced</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg stroke="currentColor" fill="#6A59D1" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-[2rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"></path></svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">JavaScript</h3>
        <h4 class="text-light font-normal">Basic</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
        <svg stroke="currentColor" fill="#6A59D1" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-[2rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"></path></svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">MySQL</h3>
        <h4 class="text-light font-normal">Advance</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
        <path fill="#6A59D1" fill-rule="#6A59D1" d="M22.903,3.286c0.679-0.381,1.515-0.381,2.193,0 c3.355,1.883,13.451,7.551,16.807,9.434C42.582,13.1,43,13.804,43,14.566c0,3.766,0,15.101,0,18.867 c0,0.762-0.418,1.466-1.097,1.847c-3.355,1.883-13.451,7.551-16.807,9.434c-0.679,0.381-1.515,0.381-2.193,0 c-3.355-1.883-13.451-7.551-16.807-9.434C5.418,34.899,5,34.196,5,33.434c0-3.766,0-15.101,0-18.867 c0-0.762,0.418-1.466,1.097-1.847C9.451,10.837,19.549,5.169,22.903,3.286z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M5.304,34.404C5.038,34.048,5,33.71,5,33.255 c0-3.744,0-15.014,0-18.759c0-0.758,0.417-1.458,1.094-1.836c3.343-1.872,13.405-7.507,16.748-9.38 c0.677-0.379,1.594-0.371,2.271,0.008c3.343,1.872,13.371,7.459,16.714,9.331c0.27,0.152,0.476,0.335,0.66,0.576L5.304,34.404z" clip-rule="evenodd"></path><path fill="#fff" fill-rule="evenodd" d="M24,10c7.727,0,14,6.273,14,14s-6.273,14-14,14 s-14-6.273-14-14S16.273,10,24,10z M24,17c3.863,0,7,3.136,7,7c0,3.863-3.137,7-7,7s-7-3.137-7-7C17,20.136,20.136,17,24,17z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M42.485,13.205c0.516,0.483,0.506,1.211,0.506,1.784 c0,3.795-0.032,14.589,0.009,18.384c0.004,0.396-0.127,0.813-0.323,1.127L23.593,24L42.485,13.205z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M31 21H33V27H31zM38 21H40V27H38z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M29 23H35V25H29zM36 23H42V25H36z" clip-rule="evenodd"></path>
    </svg>      
    </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">C</h3>
        <h4 class="text-light font-normal">Intermediate</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
<svg xmlns="http://www.w3.org/2000/svg" fill="#6A59D1"  height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M504.4 115.8a5.7 5.7 0 0 0 -.3-.7 8.5 8.5 0 0 0 -.5-1.3 6 6 0 0 0 -.5-.7 9.4 9.4 0 0 0 -.7-.9c-.2-.2-.5-.4-.8-.6a8.8 8.8 0 0 0 -.9-.7L404.4 55.6a8 8 0 0 0 -8 0L300.1 111h0a8.1 8.1 0 0 0 -.9 .7 7.7 7.7 0 0 0 -.8 .6 8.2 8.2 0 0 0 -.7 .9c-.2 .2-.4 .5-.5 .7a9.7 9.7 0 0 0 -.5 1.3c-.1 .2-.2 .4-.3 .7a8.1 8.1 0 0 0 -.3 2.1V223.2l-80.2 46.2V63.4a7.8 7.8 0 0 0 -.3-2.1c-.1-.2-.2-.5-.3-.7a8.4 8.4 0 0 0 -.5-1.2c-.1-.3-.4-.5-.5-.7a9.4 9.4 0 0 0 -.7-.9 9.5 9.5 0 0 0 -.8-.6 9.8 9.8 0 0 0 -.9-.7h0L115.6 1.1a8 8 0 0 0 -8 0L11.3 56.5h0a6.5 6.5 0 0 0 -.9 .7 7.8 7.8 0 0 0 -.8 .6 8.2 8.2 0 0 0 -.7 .9c-.2 .3-.4 .5-.6 .7a7.9 7.9 0 0 0 -.5 1.2 6.5 6.5 0 0 0 -.3 .7 8.2 8.2 0 0 0 -.3 2.1v329.7a8 8 0 0 0 4 7l192.5 110.8a8.8 8.8 0 0 0 1.3 .5c.2 .1 .4 .2 .6 .3a7.9 7.9 0 0 0 4.1 0c.2-.1 .4-.2 .6-.2a8.6 8.6 0 0 0 1.4-.6L404.4 400.1a8 8 0 0 0 4-7V287.9l92.2-53.1a8 8 0 0 0 4-7V117.9A8.6 8.6 0 0 0 504.4 115.8zM111.6 17.3h0l80.2 46.2-80.2 46.2L31.4 63.4zm88.3 60V278.6l-46.5 26.8-33.7 19.4V123.5l46.5-26.8zm0 412.8L23.4 388.5V77.3L57.1 96.7l46.5 26.8V338.7a6.9 6.9 0 0 0 .1 .9 8 8 0 0 0 .2 1.2h0a5.9 5.9 0 0 0 .4 .9 6.4 6.4 0 0 0 .4 1v0a8.5 8.5 0 0 0 .6 .8 7.6 7.6 0 0 0 .7 .8l0 0c.2 .2 .5 .4 .8 .6a8.9 8.9 0 0 0 .9 .7l0 0 0 0 92.2 52.2zm8-106.2-80.1-45.3 84.1-48.4 92.3-53.1 80.1 46.1-58.8 33.6zm184.5 4.6L215.9 490.1V397.8L346.6 323.2l45.8-26.2zm0-119.1L358.7 250l-46.5-26.8V131.8l33.7 19.4L392.4 178zm8-105.3-80.2-46.2 80.2-46.2 80.2 46.2zm8 105.3V178L455 151.2l33.7-19.4v91.4h0z"/></svg>      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">Laravel</h3>
        <h4 class="text-light font-normal">Basic</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
<path fill="#6A59D1" fill-rule="#6A59D1" d="M22.903,3.286c0.679-0.381,1.515-0.381,2.193,0 c3.355,1.883,13.451,7.551,16.807,9.434C42.582,13.1,43,13.804,43,14.566c0,3.766,0,15.101,0,18.867 c0,0.762-0.418,1.466-1.097,1.847c-3.355,1.883-13.451,7.551-16.807,9.434c-0.679,0.381-1.515,0.381-2.193,0 c-3.355-1.883-13.451-7.551-16.807-9.434C5.418,34.899,5,34.196,5,33.434c0-3.766,0-15.101,0-18.867 c0-0.762,0.418-1.466,1.097-1.847C9.451,10.837,19.549,5.169,22.903,3.286z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M5.304,34.404C5.038,34.048,5,33.71,5,33.255 c0-3.744,0-15.014,0-18.759c0-0.758,0.417-1.458,1.094-1.836c3.343-1.872,13.405-7.507,16.748-9.38 c0.677-0.379,1.594-0.371,2.271,0.008c3.343,1.872,13.371,7.459,16.714,9.331c0.27,0.152,0.476,0.335,0.66,0.576L5.304,34.404z" clip-rule="evenodd"></path><path fill="#fff" fill-rule="evenodd" d="M24,10c7.727,0,14,6.273,14,14s-6.273,14-14,14 s-14-6.273-14-14S16.273,10,24,10z M24,17c3.863,0,7,3.136,7,7c0,3.863-3.137,7-7,7s-7-3.137-7-7C17,20.136,20.136,17,24,17z" clip-rule="evenodd"></path><path fill="#6A59D1" fill-rule="evenodd" d="M42.485,13.205c0.516,0.483,0.506,1.211,0.506,1.784 c0,3.795-0.032,14.589,0.009,18.384c0.004,0.396-0.127,0.813-0.323,1.127L23.593,24L42.485,13.205z" clip-rule="evenodd"></path><path fill="#fff" fill-rule="evenodd" d="M31 21H33V27H31zM38 21H40V27H38z" clip-rule="evenodd"></path><path fill="#fff" fill-rule="evenodd" d="M29 23H35V25H29zM36 23H42V25H36z" clip-rule="evenodd"></path>
</svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">C++</h3>
        <h4 class="text-light font-normal">Advanced</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg stroke="currentColor" fill="#6A59D1" stroke-width="0" role="img" viewBox="0 0 24 24" class="text-[2rem]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><title></title><path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"></path></svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">Tailwind</h3>
        <h4 class="text-light font-normal">Intermediate</h4>
      </div>
    </div>
     <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
        <path fill="#6A59D1" d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z"></path><path fill="#6A59D1" d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z"></path><path fill="#6A59D1" d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z"></path>
      </svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">Visual Studio Code</h3>
        <h4 class="text-light font-normal">Advanced</h4>
      </div>
    </div>
    <div class="flex flex-col justify-center items-center gap-y-3 group cursor-pointer" style="opacity: 1; transform: none;">
      <div class="bg-white/80 text-[#38bdf8] p-5 shadow-md w-fit rounded-full transition-all duration-300 group-hover:-translate-y-2">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 30 30">
        <path  fill="#6A59D1" d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
      </svg>
      </div>
      <div class="flex flex-col gap-y-2 text-center">
        <h3 class="font-semibold lg:text-[1em] text-[0.9em]">Github</h3>
        <h4 class="text-light font-normal">Basic</h4>
      </div>
    </div>
  </div>
  
  <div class="flex flex-col justify-center items-center lg:order-2 order-1 lg:text-end text-center" style="opacity: 1; transform: none;">
    <h3 class="text-[#38bdf8] lg:text-end text-start lg:text-[2em] text-[1.6em] lg:text-start text-center font-bold mb-2 text-blue-700" style="opacity: 1; transform: none;">Tech Stack⚙️ & Tools🛠️</h3>
    <p class="text-black font-normal lg:max-w-[750px] md:max-w-[650px] md:text-[1em] text-[0.9em] lg:text-end text-center" style="opacity: 1; transform: none;">There are several skills and technologies that I learned below</p>
  </div>
</div>
</div>
</section>
<section
   x-data="
   {
   showCards: 'all',
   activeClasses: 'text-white text-gray-500 bg-transparent border-b-2 border-blue-500 sm:text-base dark:border-blue-400 dark:text-blue-300 whitespace-nowrap focus:outline-none',
   inactiveClasses: 'text-body-color dark:text-dark-6  hover:text-white text-gray-500',
   }
   "
   class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark bg-[#111928] "
   id="portfolio"
   >
   <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
         <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center text-white">
               <span class="text-[#38bdf8] mb-2 block text-lg font-semibold">
               Portofolio
               </span>
               <h2
                  class="text-dark mb-3 text-3xl leading-[1.208] font-bold sm:text-4xl md:text-[40px]"
                  >
                  My Personal Project
               </h2>
               <p class="text-body-color text-base dark:text-dark-6">
               I've created a few project while i was learing about frontend website development. and this is all of the projects 
               </p>
            </div>
         </div>
      </div>
      <div class="-mx-4 flex flex-wrap justify-center">
         <div class="w-full px-4 s:px-0">
            <ul class="mb-12 flex flex-wrap justify-center space-x-1">
               <li class="mb-1">
                  <button
                     @click="showCards = 'all' "
                     :class="showCards == 'all' ? activeClasses : inactiveClasses "
                     class="inline-block  py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                     >
                  All Projects
                  </button>
               </li>
               <li class="mb-1">
                  <button
                     @click="showCards = 'porto' "
                     :class="showCards == 'porto' ? activeClasses : inactiveClasses "
                     class="inline-block  py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                     >
                  Personal Portofolio
                  </button>
               </li>
               <li class="mb-1">
                  <button
                     @click="showCards = 'branding' "
                     :class="showCards == 'branding' ? activeClasses : inactiveClasses "
                     class="inline-block  py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                     >
                  Branding
                  </button>
               </li>
               <li class="mb-1">
                  <button
                     @click="showCards = 'project' "
                     :class="showCards == 'project' ? activeClasses : inactiveClasses "
                     class="inline-block  py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
                     >
                  Recent Project
                  </button>
               </li>
            </ul>
         </div>
      </div>
      <div class="-mx-4 flex flex-wrap gap-y-72 s:gap-14 justify-center">
         <div
            :class="showCards == 'all' || showCards == 'porto' ? 'block' : 'hidden' "
            class="w-full s:px-0 lg:px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card5.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Personal Portofolio</h2>
                    <a href="http://muhamadzafarsyah.github.io">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website  <i class="lni lni-eye"></i></p>
                    </a>
                </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'project' ? 'block' : 'hidden' "
            class="w-full s:px-0 lg:px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('assets/img/card-2.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Recomended film</h2>
                    <a href="http://skyflixx.github.io">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website <i class="lni lni-eye"></i></p>
                    </a>
                </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
            class="w-full s:px-0 lg:px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Brand Website</h2>
                    <a href="http://soktahu.github.io">
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website  <i class="lni lni-eye"></i></p>
                    </a>
                </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'porto' ? 'block' : 'hidden' "
            class="w-full s:px-0 lg:px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card8.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Personal Portofolio</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website</p>
                </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'porto' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card7.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Personal Portofolio</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website </p>
                </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="relative mb-12">
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card6.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Planets</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website</p>
                </div>
            </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'porto' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="relative mb-12">
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card3.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Personal Portofolio</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website</p>
                </div>
            </div>
            </div>
         </div>
         <div
            :class="showCards == 'all' || showCards == 'project' ? 'block' : 'hidden' "
            class="w-full px-4 md:w-1/2 xl:w-1/3"
            >
            <div class="relative mb-12">
            <div class="overflow-hidden bg-cover rounded-lg cursor-pointer lg:h-[197px] s:h-40 group shadow-[5px_5px_rgba(0,_98,_90,_0.4),_10px_10px_rgba(0,_98,_90,_0.3),_15px_15px_rgba(0,_98,_90,_0.2),_20px_20px_rgba(0,_98,_90,_0.1),_25px_25px_rgba(0,_98,_90,_0.05)] hover:shadow-none  transition duration-700"
                style="background-image:url('/assets/img/card4.png')">
                <div
                    class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">Micky's Web</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase inline-block w-28">Website</p>
                </div>
            </div>
            </div>
         </div>
      </div> 
   </div>
</section>

<section class="lg:p-24 bg-[#131414] flex s:flex-wrap lg:flex-nowrap sm:p-0 s:py-28" id="contact">
  <div class="font-Sora lg:px-24 s:px-8 s:order-2 lg:order-none ">
    <h1 class="text-[50px] text-white font-bold s:mt-4 lg:mt-0">Get in<span class="text-[#ffa500] font-bold">Touch</span></h1>
    <p class="text-[#808080] tracking-[1px] text-[1.1rem] leading-[30px]">Don't forget to contact me using
      Telephone number: 088214367530 or by sending a message
      on my email, Email: zafarsyah123@gmail.com.</p>
      <div class="contact-form">
            <form action="" class="mt-4">
              <input type="" placeholder="First Name" required />
              <input
                type="text"
                name="text"
                placeholder="Last Name"
                required
              />
              <input
                type="text"
                name="text"
                id=""
                placeholder="Subject"
                required
              />
              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="Your Message"
                required
              ></textarea>
              <a
                ><input value="Submit" class="btn"  id="submitBtn"
              /></a>
            </form>
          </div>
   </div>
  <div>
  <iframe class="rounded-[5px] s:order-1 s:w-[375px] lg:w-[600px] s:m-auto s:relative s:ml-[14px] s:justify-center" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d511.86235755101563!2d106.90190213738938!3d-6.217262921434968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTInNTguNiJTIDEwNsKwNTQnMDMuNiJF!5e0!3m2!1sid!2sid!4v1705550751599!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<script>

</script>

<footer class="footer p-16 bg-[#131414]">
        <div class="footer-content">
            <a href="#" class="logo">Muhamad Zafar <span>Syah</span></a>
            <p class="mt-0">Frontend Developer</p>
            <div class="icon">
                <a href="https://twitter.com/zafar_syah" target="_blank"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/zfarrrr_/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.linkedin.com/in/zafar-syah-7b8996271/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/MuhamadZafarSyah/MuhamadZafarSyah" target="_blank"><i class='bx bxl-github'></i></a>
            </div>
        </div>

        <div class="footer-content">
            <h4>Content</h4>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </div>

        <div class="footer-content">
            <h4> <svg class="inline mr-[9px] mb-2" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-1" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path><path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path></svg>Education</h4>
            <li><a href="https://www.instagram.com/smkn65jakarta.official/">School</a></li>
            <li><a href="https://www.instagram.com/cooperationcirclerpl/">Class</a></li>
        </div>
</footer>

<script src="{{ url('assets//js/script.js') }}"></script>


@vite('resources/js/app.js')

</body>
</html>
