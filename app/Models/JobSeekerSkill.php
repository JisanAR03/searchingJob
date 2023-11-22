<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerSkill extends Model
{
    use HasFactory;
    protected $primaryKey = 'JobSeekerSkillID';
    protected $table = 'JobSeekerSkills';
    protected $fillable = [
        'JobSeekerID',
        'SkillID'
    ];
}
