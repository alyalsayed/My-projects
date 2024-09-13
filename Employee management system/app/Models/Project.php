<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['project_name'];

    public function employees(){
        return $this->belongsToMany(Employee::class,'employee_project','project_id','employee_id')->withPivot('assigned_date');
    }
}
