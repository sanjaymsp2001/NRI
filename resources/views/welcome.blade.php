<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  @vite('resources/js/slider.js')
  @vite('resources/js/app.js')
</head>

<body>
  <main class="lg:w-11/12 md:w-full md:m-auto">
    <x-top-section />

    {{-- images --}}
    <section style="display: none;" class="splide md:m-4" id="slider">
      <div class="splide__track">
        <div class="splide__list md:max-h-[30rem]">
          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black">
            </div>
            <p class="absolute
              z-20 bottom-2 text-white left-4">This is something that is very big and
              big
              and big big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>

          <div class="relative splide__slide">
            <img class="object-cover w-full h-full" src="{{ asset('school-placeholder.jpeg') }}" alt="something" />
            <div class="absolute w-full h-full bottom-0 bg-gradient-to-b from-transparent from-60% to-black ">
            </div>
            <p class="absolute z-20 bottom-2 text-white left-4">this is something that is very big and big and big
              big
              big
              big big</p>
          </div>
        </div>
      </div>
    </section>

    <div class="md:flex justify-between">

      {{-- Notifications --}}
      <section class="m-4">
        <h2 class="font-bold text-2xl">Notifications</h2>
        <hr class="w-20 border-t-4 border-t-black " />

        <div class="flex flex-col gap-4 mt-5">
          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>


          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>


          <div class="flex gap-4 pb-2 border-b-2">
            <div class="p-2 pt-0 items-start font-bold">
              <p>DEC</p>
              <p>04</p>
            </div>
            <div>
              <p>International Cooperative Graduate Program for Research Scholars in National Institute
                of Materials
                Science
                (NIMS), Japan</p>
              <a href="#" class="underline mt-3 block cursor-pointer text-sm">More Deatils</a>
            </div>
          </div>

        </div>
      </section>

      {{-- stats --}}
      <section class="m-4">
        <h2 class="font-bold text-2xl md:text-3xl">Stats</h2>
        <hr class="w-20 border-t-4 border-t-black" />
        <h1>This is where the stats go</h1>
      </section>
    </div>


  </main>

  <x-bottom-section />
</body>

</html>
