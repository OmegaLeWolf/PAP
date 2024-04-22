@include('templates.navbar') 

    <div class='grid grid-cols-2'>
    <h1 class="text-2xl p-5 "> Projeto de Prova Aptidão Profissional </h1>
    <a href="{{ route('courses.show', ['id' => $curriculum->CourseID]) }}" class="bg-neutral-700 text-slate-200 hover:bg-neutral-600 p-5 rounded float-right">Back to Course</a>
    </div>

    <div class="  p-8 text-slate-200  ">

    <h1 class="text-2xl font-bold mb-4">{{ $curriculum->Title }}</h1>
    
    <div class="">
        <p class="mb-4">{!! $curriculum->CourseMaterial !!}</p>
        <p class="mb-4 mt-4">Course Author: {{ $curriculum->CourseAuthor }}</p>
        <p>Last Updated: {{ $curriculum->LastUpdated }}</p>
    </div>
    
    
    

    </div>

