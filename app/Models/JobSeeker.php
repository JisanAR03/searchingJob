<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobSeeker extends Model
{
    use HasFactory;
    protected $primaryKey = 'JobSeekerID';
    protected $table = 'JobSeekers';

    protected $fillable = [
        'SocialId',
        'verification_token',
        'is_verified',
        'FullName',
        'Email',
        'PasswordHash',
        'WorkingFor',
        'ProfilePhoto',
        'LinkedInURL',
        'PhoneNumber',
        'Location',
        'WorkTitle',
        'CurrentCompanyName',
        'WorkStart',
        'WorkEnd',
        'AppExperienceReview',
        'SalaryExpectation',
        'Resume',
        'AvailableForWork',
        'MessagePermit',
        'SubsDay',
        'SubsSrtDate',
        'SubsEndDate',
        'SubsType',
    ];
}
