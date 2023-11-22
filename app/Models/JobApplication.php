<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    protected $table = 'JobApplications';
    protected $primaryKey = 'JobApplicationID';
    protected $fillable = [
        'JobSeekerID',
        'JobPostID',
        'Email',
        'FullName',
        'PhoneNumber',
        'Location',
        'CurrentRole',
        'CoverLetterOptional',
        'CoverLetter',
        'AlertForFutureJobs',
    ];
}
