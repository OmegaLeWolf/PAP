@include('templates.navbar') 


    <div class="max-w-3xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Create Course Curriculum</h1>
        <form action="{{ route('curriculum.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="title" class="block font-semibold">Title:</label>
                <input type="text" id="title" name="title" class="form-input w-full">
            </div>
            <div>
                <label for="content" class="block font-semibold">Content:</label>
                <textarea id="content" name="content" class="form-textarea w-full" rows="8"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Curriculum</button>
        </form>
    </div>
