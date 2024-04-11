<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Course extends Model
{
    use HasFactory;

    public function curriculum(): HasMany
    {
        return $this->hasMany(CourseCurriculum::class);
    }

    // Define the fillable fields
    protected $fillable = ['Name', 'Description', 'HoursUntilCompletion', 'UsersEnrolled'];
}
