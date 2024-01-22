<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://unpkg.com/feather-icons"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @push('css')
    <link rel="stylesheet" href="resources/css/app.css">
@endpush

        <style>/*! tailwindcss v3.0.23 | MIT License | https://tailwindcss.com*/*,:after,:before{box-sizing:border-box;border:0 solid #e5e7eb}:after,:before{--tw-content:""}html{scroll-behavior:smooth;line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:initial}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:initial;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:initial}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0}fieldset,legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input:-ms-input-placeholder,textarea:-ms-input-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,:after,:before{--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#3b82f680;--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%;margin-right:auto;margin-left:auto;padding-right:16px;padding-left:16px}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1320px){.container{max-width:1320px}}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.top-0{top:0}.left-0{left:0}.right-4{right:1rem}.top-full{top:100%}.bottom-0{bottom:0}.left-1\/2{left:50%}.bottom-4{bottom:1rem}.z-10{z-index:10}.z-\[9999\]{z-index:9999}.mx-8{margin-left:2rem;margin-right:2rem}.mx-auto{margin-left:auto;margin-right:auto}.mx-4{margin-left:1rem;margin-right:1rem}.mt-3{margin-top:.75rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-1{margin-top:.25rem}.mb-5{margin-bottom:1.25rem}.mb-10{margin-bottom:2.5rem}.mt-10{margin-top:2.5rem}.mb-3{margin-bottom:.75rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mr-3{margin-right:.75rem}.mb-16{margin-bottom:4rem}.mb-2{margin-bottom:.5rem}.mb-12{margin-bottom:3rem}.mt-5{margin-top:1.25rem}.mb-8{margin-bottom:2rem}.mt-2{margin-top:.5rem}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.hidden{display:none}.h-5{height:1.25rem}.h-4{height:1rem}.h-9{height:2.25rem}.h-32{height:8rem}.h-14{height:3.5rem}.w-full{width:100%}.w-9{width:2.25rem}.w-4{width:1rem}.w-14{width:3.5rem}.w-5{width:1.25rem}.max-w-\[250px\]{max-width:250px}.max-w-full{max-width:100%}.max-w-md{max-width:28rem}.max-w-xl{max-width:36rem}.max-w-\[120px\]{max-width:120px}.origin-top-left{transform-origin:top left}.origin-bottom-left{transform-origin:bottom left}.-translate-x-1\/2{--tw-translate-x:-50%}.-translate-x-1\/2,.rotate-45{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.rotate-45{--tw-rotate:45deg}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.self-end{align-self:flex-end}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.scroll-smooth{scroll-behavior:smooth}.truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.rounded-lg{border-radius:.5rem}.rounded-full{border-radius:9999px}.rounded-md{border-radius:.375rem}.rounded-xl{border-radius:.75rem}.border{border-width:1px}.border-t{border-top-width:1px}.border-t-2{border-top-width:2px}.border-l-2{border-left-width:2px}.border-slate-300{--tw-border-opacity:1;border-color:rgb(203 213 225/var(--tw-border-opacity))}.border-slate-700{--tw-border-opacity:1;border-color:rgb(51 65 85/var(--tw-border-opacity))}.bg-transparent{background-color:initial}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.bg-slate-500{--tw-bg-opacity:1;background-color:rgb(100 116 139/var(--tw-bg-opacity))}.bg-primary{--tw-bg-opacity:1;background-color:rgb(20 184 166/var(--tw-bg-opacity))}.bg-slate-100{--tw-bg-opacity:1;background-color:rgb(241 245 249/var(--tw-bg-opacity))}.bg-slate-800{--tw-bg-opacity:1;background-color:rgb(30 41 59/var(--tw-bg-opacity))}.bg-slate-200{--tw-bg-opacity:1;background-color:rgb(226 232 240/var(--tw-bg-opacity))}.bg-dark{--tw-bg-opacity:1;background-color:rgb(15 23 42/var(--tw-bg-opacity))}.fill-current{fill:currentColor}.p-1{padding:.25rem}.p-4{padding:1rem}.p-3{padding:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.px-8{padding-left:2rem;padding-right:2rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-8{padding-top:2rem;padding-bottom:2rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pl-8{padding-left:2rem}.pt-36{padding-top:9rem}.pb-32{padding-bottom:8rem}.pb-16{padding-bottom:4rem}.pt-24{padding-top:6rem}.pb-12{padding-bottom:3rem}.pt-10{padding-top:2.5rem}.text-center{text-align:center}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:.875rem;line-height:1.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-2xl{font-size:1.5rem;line-height:2rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.font-semibold{font-weight:600}.font-medium{font-weight:500}.uppercase{text-transform:uppercase}.leading-relaxed{line-height:1.625}.text-primary{--tw-text-opacity:1;color:rgb(20 184 166/var(--tw-text-opacity))}.text-dark{--tw-text-opacity:1;color:rgb(15 23 42/var(--tw-text-opacity))}.text-secondary,.text-slate-500{--tw-text-opacity:1;color:rgb(100 116 139/var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.text-slate-300{--tw-text-opacity:1;color:rgb(203 213 225/var(--tw-text-opacity))}.text-pink-500{--tw-text-opacity:1;color:rgb(236 72 153/var(--tw-text-opacity))}.text-sky-500{--tw-text-opacity:1;color:rgb(14 165 233/var(--tw-text-opacity))}.opacity-60{opacity:.6}.shadow-lg{--tw-shadow:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow-lg,.shadow-md{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-md{--tw-shadow:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color)}.grayscale{--tw-grayscale:grayscale(100%);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-text-decoration-color,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-300{transition-duration:.3s}.duration-500{transition-duration:.5s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}body{font-family:Inter,sans-serif}.navbar-fixed{position:fixed;z-index:9999;background-color:rgb(255 255 255/var(--tw-bg-opacity));--tw-bg-opacity:0.7;--tw-backdrop-blur:blur(4px);-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.dark .navbar-fixed{background-color:rgb(15 23 42/var(--tw-bg-opacity));--tw-bg-opacity:0.5}.navbar-fixed{box-shadow:inset 0 -1px 0 0 #0003}.hamburger-line{margin-top:.5rem;margin-bottom:.5rem;display:block;height:2px;width:30px;--tw-bg-opacity:1;background-color:rgb(15 23 42/var(--tw-bg-opacity))}.dark .hamburger-line{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.hamburger-active>span:first-child{--tw-rotate:45deg}.hamburger-active>span:first-child,.hamburger-active>span:nth-child(2){transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hamburger-active>span:nth-child(2){--tw-scale-x:0;--tw-scale-y:0}.hamburger-active>span:nth-child(3){--tw-rotate:-45deg}#dark-toggle:checked~label div.toggle-circle,.hamburger-active>span:nth-child(3){transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}#dark-toggle:checked~label div.toggle-circle{--tw-translate-x:0.75rem}@-webkit-keyframes pulse{50%{opacity:.5}}@keyframes pulse{50%{opacity:.5}}.hover\:animate-pulse:hover{-webkit-animation:pulse 2s cubic-bezier(.4,0,.6,1) infinite;animation:pulse 2s cubic-bezier(.4,0,.6,1) infinite}.hover\:border-primary:hover{--tw-border-opacity:1;border-color:rgb(20 184 166/var(--tw-border-opacity))}.hover\:bg-primary:hover{--tw-bg-opacity:1;background-color:rgb(20 184 166/var(--tw-bg-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.hover\:text-primary:hover{--tw-text-opacity:1;color:rgb(20 184 166/var(--tw-text-opacity))}.hover\:opacity-80:hover{opacity:.8}.hover\:opacity-100:hover{opacity:1}.hover\:shadow-lg:hover{--tw-shadow:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.hover\:grayscale-0:hover{--tw-grayscale:grayscale(0);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.focus\:border-primary:focus{--tw-border-opacity:1;border-color:rgb(20 184 166/var(--tw-border-opacity))}.focus\:outline-none:focus{outline:2px solid #0000;outline-offset:2px}.focus\:ring-1:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-primary:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(20 184 166/var(--tw-ring-opacity))}.group:hover .group-hover\:text-primary{--tw-text-opacity:1;color:rgb(20 184 166/var(--tw-text-opacity))}.dark .dark\:bg-dark{--tw-bg-opacity:1;background-color:rgb(15 23 42/var(--tw-bg-opacity))}.dark .dark\:bg-slate-800{--tw-bg-opacity:1;background-color:rgb(30 41 59/var(--tw-bg-opacity))}.dark .dark\:bg-slate-300{--tw-bg-opacity:1;background-color:rgb(203 213 225/var(--tw-bg-opacity))}.dark .dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.dark .dark\:text-dark{--tw-text-opacity:1;color:rgb(15 23 42/var(--tw-text-opacity))}.dark .dark\:shadow-slate-500{--tw-shadow-color:#64748b;--tw-shadow:var(--tw-shadow-colored)}@media (min-width:640px){.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}}@media (min-width:768px){.md\:w-1\/2{width:50%}.md\:w-1\/3{width:33.333333%}.md\:scale-125{--tw-scale-x:1.25;--tw-scale-y:1.25;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.md\:text-xl{font-size:1.25rem;line-height:1.75rem}.md\:text-lg{font-size:1.125rem;line-height:1.75rem}}@media (min-width:1024px){.lg\:static{position:static}.lg\:right-0{right:0}.lg\:mx-6{margin-left:1.5rem;margin-right:1.5rem}.lg\:mx-auto{margin-left:auto;margin-right:auto}.lg\:mt-0{margin-top:0}.lg\:mt-9{margin-top:2.25rem}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:w-1\/2{width:50%}.lg\:w-2\/3{width:66.666667%}.lg\:max-w-full{max-width:100%}.lg\:rounded-none{border-radius:0}.lg\:bg-transparent{background-color:initial}.lg\:pt-10{padding-top:2.5rem}.lg\:text-5xl{font-size:3rem;line-height:1}.lg\:text-2xl{font-size:1.5rem;line-height:2rem}.lg\:text-4xl{font-size:2.25rem;line-height:2.5rem}.lg\:text-lg{font-size:1.125rem;line-height:1.75rem}.lg\:text-3xl{font-size:1.875rem;line-height:2.25rem}.lg\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.dark .lg\:dark\:bg-transparent{background-color:initial}}@media (min-width:1280px){.xl\:mx-auto{margin-left:auto;margin-right:auto}.xl\:mx-8{margin-left:2rem;margin-right:2rem}.xl\:w-10\/12{width:83.333333%}.xl\:w-1\/3{width:33.333333%}}</style>
        @vite('resources/css/app.css')
        <script>

      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
    </head>
    <body class="scroll-smooth">

    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a class="block py-4 text-3xl font-bold text-primary cursor-not-allowed">Portofolio</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent">
              <ul class="block lg:flex"
                <li class="group">
                  <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary  duration-300 hover:translate-x-[-3px] hover:translate-y-[-5px] dark:text-white">Home</a>
                </li>
                <li class="group">
                  <a href="#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary duration-300 hover:translate-x-[-3px] hover:translate-y-[-5px] dark:text-white">About</a>
                </li>
                <li class="group">
                  <a href="#portfolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary duration-300 hover:translate-x-[-3px] hover:translate-y-[-5px] dark:text-white">Portfolio</a>
                </li>
                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500"><i data-feather="sun"></i></span>
                    <input type="checkbox" class="hidden" id="dark-toggle" />
                    <label for="dark-toggle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500"><i data-feather="moon" style=""></i></span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl">Helo, my name is <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Ferdian Daffarel Ardibrata</span></h1>
            <h2 class="mb-5 text-lg font-medium text-dark dark:text-white lg:text-2xl"> Frontend Developer</h2>
            <p class="mb-10 font-medium leading-relaxed text-secondary">
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="{{ URL::to('/assets/img/Profile.jpg') }}" alt="Ferdian" class="relative z-10 mx-16 h-1/5"/>
              <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-110">
                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#14b8a6"
                    d="M47.4,-51C59.2,-35.6,65.1,-17.8,63.4,-1.7C61.7,14.5,52.6,28.9,40.8,36.6C28.9,44.2,14.5,45,-2,47C-18.4,49,-36.8,52.1,-45.4,44.5C-53.9,36.8,-52.5,18.4,-51.2,1.3C-49.9,-15.8,-48.7,-31.7,-40.2,-47.1C-31.7,-62.4,-15.8,-77.3,1,-78.3C17.8,-79.2,35.6,-66.3,47.4,-51Z"
                    transform="translate(100 100) scale(1.1)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-10 w-full px-4 lg:w-1/2">
            <h4 class="mb-3 text-lg font-bold uppercase text-primary">About</h4>
            <h2 class="mb-5 max-w-md text-3xl font-bold text-dark dark:text-white lg:text-4xl">My Name Ferdian Daffarel </h2>
            <p class="max-w-xl text-base font-medium text-secondary lg:text-lg">A Beginner Frontend Developer who likes to trying new things</p>

          <div class="w-full px-1 lg:w-1/2">
            <h3 class="mb-4 text-1xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">My Contact</h3>
            <p class="mb-6 text-base font-medium text-secondary lg:text-lg">

            </p>
            <div class="flex items-center">

              <!-- Instagram -->
              <a
                href="https://instagram.com/ferdian_dffarel/"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 dark:text-white hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>
              <!-- LinkedIn -->
              <a
                href="https://www.linkedin.com/in/ferdian-daffarel-ard"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 dark:text-white hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h4 class="mb-2 text-lg font-semibold text-primary">Portfolio</h4>
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">My Project</h2>
            <p class="text-md font-medium text-secondary md:text-lg">
            </p>
          </div>
        </div>

        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12 snap-x">
          <div class="mb-12 p-4 md:w-1/2 snap-start">
            <div class="overflow-hidden rounded-md shadow-xl shadow-emerald-500 hover:animate-pulse">
              <img src="{{ asset('assets/img/Film.png') }}" alt="Film" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white "> Film </h3>
            <p class="text-base font-medium text-secondary"></p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-xl shadow-emerald-500 hover:animate-pulse">
              <img src="{{ asset('assets/img/Movien.png') }}" alt="Movien" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Movien</h3>
            <p class="text-base font-medium text-secondary"></p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-xl shadow-emerald-500 hover:animate-pulse">
              <img src="{{ asset('assets/img/Biodata.png') }}" alt="Biodata" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Biodata</h3>
            <p class="text-base font-medium text-secondary"></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->





    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-12 w-full px-4 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#home" class="mb-3 inline-block text-base hover:text-primary">Beranda</a>
              </li>
              <li>
                <a href="#about" class="mb-3 inline-block text-base hover:text-primary">Tentang Saya</a>
              </li>
              <li>
                <a href="#portfolio" class="mb-3 inline-block text-base hover:text-primary">Portfolio</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full border-t border-slate-700 pt-10">
          <div class="mb-5 flex items-center justify-center">
            <!-- Instagram -->
            <a
              href="https://instagram.com/ferdian_dffarel/"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>
            <!-- LinkedIn -->
            <a
              href="https://www.linkedin.com/in/ferdian-daffarel-ard"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>LinkedIn</title>
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                />
              </svg>
            </a>
          </div>

        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
      <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <script>// Navbar Fixed
const header = function () {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if (window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove('navbar-fixed');
    toTop.classList.remove('flex');
    toTop.classList.add('hidden');
  }
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});

// Klik di luar hamburger
window.addEventListener('click', function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove('hamburger-active');
    navMenu.classList.add('hidden');
  }
});

// Darkmode toggle
const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');

darkToggle.addEventListener('click', function () {
  if (darkToggle.checked) {
    html.classList.add('dark');
    localStorage.theme = 'dark';
  } else {
    html.classList.remove('dark');
    localStorage.theme = 'light';
  }
});

// pindahkan posisi toggle sesuai mode
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  darkToggle.checked = true;
} else {
  darkToggle.checked = false;
}</script>
  <script>
      feather.replace();
    </script>
  </body>
  <button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="dark:bg-white dark:text-dark hidden fixed z-50 bottom-10 right-10 p-4 border-0 w-14 h-14 rounded-full shadow-md bg-dark hover:bg-sky-600 text-white text-lg font-semibold transition-colors duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>

<script>
    // Get the 'to top' button element by ID
    var toTopButton = document.getElementById("to-top-button");

    // Check if the button exists
    if (toTopButton) {

        // On scroll event, toggle button visibility based on scroll position
        window.onscroll = function() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        };

        // Function to scroll to the top of the page smoothly
        window.goToTop = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    }
</script>
</html>
