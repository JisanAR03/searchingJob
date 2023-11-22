<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Employer extends Model
{

    use HasRoles;
    protected $table = 'Employers';
    use HasFactory;
    protected $primaryKey = 'EmployerID';
    protected $fillable = [
        'SocialId',
        'verification_token',
        'is_verified',
        'CompanyName',
        'BusinessEmail',
        'PasswordHash',
        'FullName',
        'RoleInCompany',
        'AboutCompany',
        'CompanyMission',
        'WebsiteURL',
        'Logo',
        'Banner',
        'Email',
        'LinkedInURL',
        'PhoneNumber',
        'Location',
        'SubsDay',
        'SubsSrtDate',
        'SubsEndDate',
        'SubsType',
    ];
}
