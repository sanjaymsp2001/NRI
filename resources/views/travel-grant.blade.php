<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <style>
    .background {
      background: url('images/writing.jpeg'), rgb(39, 39, 39);
      background-blend-mode: multiply;
      background-position: center;

    }
  </style>
</head>

<body>
  <main class="lg:w-11/12 md:w-full md:m-auto">
    <x-top-section />
    <section class="background flex flex-col pb-4 justify-center">
      <h2 class="text-white text-center font-bold text-3xl my-4">Travel Grant</h4>
        <div class="flex flex-col md:flex-row gap-4">
          <p class="text-white max-w-[75%] leading-8 min-w-full px-6 mt-2">
            <span class="text-green font-semibold">The Centre for International Relations (CIR)</span> provides financial
            assistance to the faculty members of Anna University, Chennai for presenting a paper in the International
            Conferences/Seminars/Symposias/Workshops held abroad. The scheme is aimed at promoting Research and
            Development Eligibility demands that the applicant must be a regular employee in University with a minimum
            service of 3 years. Financial assistance would be extended only to those applicants who have not received
            grants towards travel expenditure (either whole or in part) during the last three years from DST Purse II
            programme / UGC / CIR (Centre for International Relations) for attending any Conference/Seminar/Symposium
            held abroad. The travel grant is provided to meet the Air fare, perdiem, Registration fees, VISA, Insurance
            and accommodation charges.
          </p>
        </div>
    </section>
    <section class="px-6 md:px-4 flex flex-col gap-2 my-2 md:my-5">
      <h3 class="font-bold text-2xl">Important Links</h3>
      <hr class="w-20 border-t-4 border-t-black " />
      <div class="flex flex-col gap-4 mt-4">
        <a href="https://www.annauniv.edu/cir/pdf/tg.pdf" target="_blank" class="hover:underline">Click here for
          application form & other
          details of Travel Grant</a>
        <a href="https://www.annauniv.edu/cir/pdf/pr.pdf" target="_blank" class="hover:underline">Report on Conference
          after participation</a>
        <a href="https://www.annauniv.edu/cir/pdf/ppt.pdf" target="_blank" class="hover:underline">Circular for the
          presentation after
          participation in the International
          Conference</a>
      </div>
    </section>
  </main>
  <x-bottom-section />
</body>

</html>
