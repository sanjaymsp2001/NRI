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
    <section class="background flex flex-col pb-4 md:min-h-[530px] justify-center">
      <h2 class="text-white text-center font-bold text-3xl my-4">Our Activities</h4>
        <div class="flex flex-col md:flex-row gap-4">
          <p class="text-white max-w-[75%] leading-8 min-w-full px-6 mt-2">
            <span class="text-green font-semibold">The Centre for International Relations (CIR)</span> coordinates
            bilateral research and academic programmes with overseas Institutions/Universities through Memorandam of
            Understanding (MoU), Exchange of Faculty/Students, Foreign Language Programmes and conduct of International
            Joint Seminars/Conferences. At present, the University has established academic and research collaborations
            with more than 40 foreign Universities/Institutions through MoUs. CIR has Overseas Professor Scheme with
            Thirty Professors from the USA, Germany, Australia, Japan, Sweden, France, Italy, Switzerland and England.
            The Overseas Professors have been visiting Anna University Chennai and interacting with faculty and
            students.<br />

            CIR organizes International Seminar Series periodically with experts from foreign Universities as resource
            persons on specific topics of Applied Sciences, Technology and Engineering. The Centre also conducts foreign
            language courses such as German, French and Japanese for faculty member and students. In addition the centre
            supports exchange of faculty and students on short and long term visits to the institutions that have MoU.
          </p>
        </div>
    </section>
  </main>
  <x-bottom-section />
</body>

</html>
