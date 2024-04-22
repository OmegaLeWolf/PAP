<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCurriculum;
use Illuminate\Support\Facades\Auth;

class CourseCurriculumController extends Controller
{
    public function create()
    {
        $courses = Course::pluck('Name', 'CourseID'); // Fetch course names and IDs

        return view('curriculum.create', compact('courses')); // Pass courses to the view
    }

    public function store(Request $request)
    {
       
       
        $request->validate([
            'CourseID' => 'required', // Ensure that the selected course_id exists in the courses table
            'Title' => 'required',
            'CourseMaterial' => 'required',
        ]);
        
        if(Auth::user()) {
            $request->CourseAuthor = Auth::user()->Name;
        }
        

        CourseCurriculum::create([
            'CourseID' => $request->CourseID,
            'Title' => $request->Title,
            'CourseAuthor' => $request->CourseAuthor,
            'CourseMaterial' => $request->CourseMaterial,
        ]);

        return redirect()->route('curriculum.create')->with('success', 'Curriculum created successfully!');
    }
}
