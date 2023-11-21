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
    <section class="background flex flex-col pb-4">
      <h2 class="text-white text-center font-bold text-3xl my-4">Director's Desk</h4>
        <div class="flex flex-col md:flex-row gap-4">
          <p class="text-white max-w-[75%] leading-8 min-w-full md:min-w-[auto] px-6 mt-2">
            <span class="text-green font-semibold">The Centre for International Relations (CIR)</span> was established in
            the
            year 2001
            with an objective of
            strengthening
            bilateral research and academic programmes of the centres/departments of Anna University with overseas
            Institutions/Universities through Memorandum of Understanding. The Centre is an autonomous body headed by a
            Professor and Director with Additional Director, Deputy Director and 5 administrative office staff. <br />

            The centre facilitates exchange of Students/Faculty members with foreign universities. Through the student
            exchange
            programme, the students learn analytical and problem solving skills, language skills, cultural relations and
            general
            knowledge. In addition, they learn to improve themselves through the experience of studying and staying in
            another
            country. Faculty members exchange information on education and research. In addition to academic
            publications,
            the
            faculty members from both sides explore mutually beneficial collaborative research projects. <br />

            The centre also facilitates the conduct of International Joint Seminars / Conferences. International
            seminars
            bring
            faculty members / students globally together and share their knowledge, research experience, country related
            problems and solutions for them. The Centre organizes special lectures and seminars by professors/experts
            from
            various foreign Universities/Institutions. These talks are very much essential for innovation, research &
            development, to modify or eliminate the existing old technologies. Guidelines to higher education with
            funding
            facilities in different countries are also given through these talks. <br />

            The centre also conducts foreign language courses such as German, French and Japanese for students,
            researchers
            and
            faculty members to be proficient for higher studies or job opportunities overseas. <br />

            The centre invites prominent visitors from various foreign Universities/Institutions to Anna University to
            discuss
            about the collaboration possibilities of further strengthening the bilateral academic and research
            cooperation.
            <br />
          </p>
          <div class="self-center md:pr-6">
            <img class="border-[10px]" alt="director" src="images/director.jpeg" />
            <div class="flex items-center flex-col text-white gap-2">
              <p class="text-xl">Prof. R. BASKARAN</p>
              <p>DIRECTOR</p>
            </div>
          </div>
        </div>
    </section>
  </main>
  <x-bottom-section />
</body>

</html>
