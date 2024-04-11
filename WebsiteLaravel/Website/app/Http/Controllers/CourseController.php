<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCurriculum;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.course', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::where('CourseID', $id)->firstOrFail();
        $curriculums = CourseCurriculum::where('CourseID', $id)->get();
        //dd($course, $curriculums);
        return view('courses.show', compact('course', 'curriculums'));

        
    }

    public function showMaterial($courseId, $curriculumTitle)
    {
        $curriculum = CourseCurriculum::where('Title', $curriculumTitle)->firstOrFail();

        return view('courses.show_material', compact('curriculum'));
    }
}
