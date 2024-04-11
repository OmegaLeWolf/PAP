@include('templates.navbar') 

<h1 class="text-2xl p-5">Projeto de Prova Aptidão Profissional</h1>
<h2 class="text-xl px-5">Curso de Cibersegurança</h2>

<!-- Course List -->
<div class="m-5 rounded grid grid-cols-3 gap-5">
    @foreach($courses as $course)
    <div id='{{ $course->CourseID }}' class="rounded-xl bg-neutral-600 p-5 cursor-pointer course" > 
        <!-- Course title -->
        <h1 class="text-xl text-lime-500 text-center p-2">> {{$course->Name}}</h1>
        <!-- Course Description -->
        <p class="text-md text-center p-2">{{$course->Description}}</p>
        <!-- Background = Course image???? -->
    </div>

    @endforeach
</div>
<!-- Course List -->


<script>
    // Get all elements with class "course"
    var courses = document.querySelectorAll('.course');

    // Add click event listener to each course
    courses.forEach(function(course) {
        course.addEventListener('click', function() {
            // Get the course ID from the data-course-id attribute
            var courseId = this.getAttribute('id');
            // Construct the URL for the course page
            var courseUrl = '/courses/' + courseId; // Change this according to your route structure
            // Redirect to the course page
            window.location.href = courseUrl;
        });
    });
</script>