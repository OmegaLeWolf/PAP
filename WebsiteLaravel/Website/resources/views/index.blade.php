@include('templates.navbar')

            <!-- Rest of page -->
            
            <div class="col-span-3 text-slate-200">

                <h1 class="text-2xl p-5 "> Projeto de Prova Aptidão Profissional </h1>
                
                <div class="max-w-3xl mx-auto">
                    <h1 class="text-2xl font-bold mb-4">Create Course Curriculum</h1>
                    <form action="{{ route('curriculum.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="title" class="block font-semibold">Title:</label>
                            <input type="text" id="title" name="title" class="form-input w-full text-slate-800">
                        </div>
                        <div>
                            <label for="content" class="block font-semibold">Content:</label>
                            <div id="toolbar-container"></div>
                            <div id="editor" class='bg-white text-slate-800 h-[50%] resize-y'></div>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Curriculum</button>
                    </form>
                </div>

                <!-- Initialize CKEditor -->
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>


            </div>
            <!-- Rest of page -->
