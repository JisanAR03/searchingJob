<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    // protected $primaryKey = 'JobSeekerID';
    // protected $table = 'JobSeekers';
    protected $primaryKey = 'JobPostID';
    protected $table = 'JobPosts';
    protected $fillable = [
        'EmployerID',
        'JobTitle',
        'Category',
        'PostDate',
        'PostExpired',
        'Compensation',
        'WorkType',
        'JobLocation',
        'Description',
        'SalaryRange',
        'Active',
        'ApplyPermission',
    ];
}
