@include('templates.navbar')

            <!-- Rest of page -->
            
            <div class="col-span-3 text-slate-200">

                <div class='grid grid-cols-2'>
                <h1 class="text-2xl p-5 "> Projeto de Prova Aptidão Profissional </h1>

                <div class='p-5'>
                    <a href="{{ route('courses.index') }}" class="bg-neutral-500 text-slate-200 hover:bg-neutral-600 p-5 rounded float-right">Return to Course List</a>
                </div>
                </div>
                
                <div class="max-w-[80%] max-h-[40%] mx-auto">
                    <h1 class="text-2xl font-bold mb-4">Create Course Curriculum</h1>
                    <form action="{{ route('curriculum.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="CourseID" class="block font-semibold">Course:</label>
                            <select id="CourseID" name="CourseID" class="form-select w-full text-slate-800">
                                @foreach($courses as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="Title" class="block font-semibold">Title:</label>
                            <input type="text" id="Title" name="Title" class="form-input w-full text-slate-800">
                        </div>
                        
                        <div>
                            <label for="editor" class="block font-semibold">Content:</label>
                            <div id="editor" class='bg-white text-slate-800 h-[50%] resize-y '></div>
                            <input type="hidden" id="CourseMaterial" name="CourseMaterial">
                        </div>
                        
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Curriculum</button>
                    </form>
                </div>

                <!-- Initialize CKEditor -->
                <script>
                    ClassicEditor
    .create(document.querySelector('#editor'), {
        // Specify CKEditor configurations here
    })
    .then(editor => {
        // CKEditor ready, set up event listener to modify HTML content
        editor.model.document.on('change:data', () => {
            // Fetch HTML content from CKEditor
            const htmlContent = editor.getData();
            // Modify HTML content to add class to code blocks
            const modifiedHtmlContent = addClassToCodeBlocks(htmlContent);
            // Update hidden input with modified HTML content
            document.querySelector('#CourseMaterial').value = modifiedHtmlContent;
        });
    })
    .catch(error => {
        console.error(error);
    });

// Function to add class to code blocks in HTML content
function addClassToCodeBlocks(htmlContent) {
    // Create a DOM element to parse HTML content
    const parser = new DOMParser();
    const doc = parser.parseFromString(htmlContent, 'text/html');
    // Select all code blocks and add class to each of them
    const codeBlocks = doc.querySelectorAll('code');
    codeBlocks.forEach(codeBlock => {
        codeBlock.classList.add('text-sm', 'sm:text-base', 'inline-flex', 'text-left', 'items-center', 'space-x-4', 'bg-gray-800', 'text-white', 'rounded-lg', 'p-4', 'pl-6'); // Add the specified classes
    });
    // Serialize modified HTML content back to string
    return new XMLSerializer().serializeToString(doc);
}
                </script>

                <style>
                    .ck-editor__editable {min-height: 350px; max-height: 350px; resize:'vertical'; color: rgb(30 41 59);}
                    
                </style>


            </div>
            <!-- Rest of page -->
