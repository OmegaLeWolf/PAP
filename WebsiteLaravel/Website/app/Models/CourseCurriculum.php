<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    use HasFactory;

    
    protected $primaryKey = 'CourseID';
    protected $table = 'coursecurriculum';

    

    protected $fillable = ['CourseID', 'Title', 'CourseMaterial', 'CourseAuthor', 'LastUpdated'];
}
