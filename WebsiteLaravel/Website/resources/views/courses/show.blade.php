@include('templates.navbar') 
    <h1 class="text-2xl p-5 "> Projeto de Prova Aptidão Profissional </h1>

    <div class="  p-8 text-slate-200  ">

        <h1 class="text-3xl text-lime-500 font-bold mb-6">> {{ $course->Name }}</h1>
        <p>{{ $course->Description }}</p>

        <h2 class="text-3xl font-bold my-6">Course Materials</h2>
        <div class="">
            <button onclick="toggleDropdown()" class="bg-neutral-700 text-slate-200 font-semibold py-2 px-4 rounded inline-flex items-center">
                <span class="mr-1">Select Material</span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 12l-6-6h12l-6 6z" />
                </svg>
            </button>
            <ul id="dropdown" class="hidden absolute mt-2 bg-neutral-700 rounded-md shadow-lg ">
                @foreach($curriculums as $curriculum)
                    <li>
                        <a href="{{ route('courses.material', ['course_id' => $course->CourseID, 'curriculum_Title' => $curriculum->Title]) }}" class="block px-4 py-2 text-slate-200 hover:bg-neutral-600 rounded">{{ $curriculum->Title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("dropdown");
                dropdown.classList.toggle("hidden");
            }
        </script>
