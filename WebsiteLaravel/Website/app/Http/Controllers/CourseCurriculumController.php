<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCurriculum;

class CourseCurriculumController extends Controller
{
    public function create()
    {
        return view('curriculum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);

        CourseCurriculum::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
        ]);

        return redirect()->route('curriculum.create')->with('success', 'Curriculum created successfully!');
    }
}
