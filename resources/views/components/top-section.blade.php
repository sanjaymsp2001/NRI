<div class="flex flex-col items-center gap-5 mt-5 md:flex-row md:m-4 md:items-end">
  <img class="w-1/3 md:w-32" src="{{ asset('logo.svg') }}" alt="logo" />
  <div class="flex flex-col items-center md:items-start">
    <h1 class="font-bold text-xl md:text-3xl">பன்னாட்டு தொடர்புகள் மையம் </h1>
    <h1 class="font-bold text-xl md:text-3xl">center for international relations</h1>
  </div>
</div>


<!-- Mobile navigation  -->
<nav x-data="{ show: false }" class="h-full bg-white py-6 px-2 md:hidden">
  <div @click="show = !show" id="ham" class="toggle-btn flex gap-4" id="toggle-btn">
    <div class="flex flex-col gap-1 justify-center cursor-pointer">
      <span class="pill"></span>
      <span class="pill"></span>
      <span class="pill"></span>
    </div>
    <p class="font-bold">Menu</p>
  </div>
  <ul style="display: none" x-show="show" class="mt-6 font-bold flex flex-col gap-4"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 scale-90" x-transition:leave-end="opacity-0 scale-100">
    <li><a href="/">Home</a></li>
    <li><a href="/director-desk">Director's Desk</a></li>
    <li><a href="/about-us">About us</a></li>
    <li><a href="/tavel-grant">MOU</a></li>
    <li><a target="_blank" href="https://www.annauniv.edu/cir/images/fcsep.jpg">Student exchange program</a></li>
    <li><a href="#">travel grant</a></li>
    <li><a href="#">international hostels</a></li>
    <li><a href="/merge">merge</a></li>
  </ul>
</nav>

{{-- Desktop Navigation --}}
<nav class="hidden md:block m-4">
  <ul class="mt-6 flex justify-around">
    <li class="link"><a href="/">Home</a></li>
    <li class="link"><a href="/director-desk">Director's Desk</a></li>
    <li class="link"><a href="/about-us">About us</a></li>
    <li class="link"><a href="#">MOU</a></li>
    <li class="link"><a target="_blank" href="https://www.annauniv.edu/cir/images/fcsep.jpg">Student exchange
        program</a></li>
    <li class="link"><a href="/travel-grant">travel grant</a></li>
    <li class="link"><a href="#">international hostels</a></li>
    <li class="link"><a href="/merge">merge</a></li>
  </ul>
</nav>
