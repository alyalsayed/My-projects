<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'ssn';
    protected $fillable=['ssn','fname','lname','dept_id','email','phone','salary','photo'];

    public function department(){
        return $this->belongsTo(Department::class,'dept_id','dept_num');
    }
    public function car(){
        return $this->hasOne(Car::class,'employee_id','ssn');
    }
    public function projects(){
        return $this->belongsToMany(Project::class,'employee_project','employee_id','project_id')->withPivot('assigned_date');
    }
}
