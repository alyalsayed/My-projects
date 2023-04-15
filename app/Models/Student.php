<?php


/*
  1-1
student hasone tablet
tablet belongsTo on students

  1 -m
STUDENT BELONGTOone department
department hasmany students

  m -m
STUDENT BELONGTOMANY department
department BELONGTOMANY students

*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id', 'name', 'email', 'phone', 'department_id', 'image'];
    //protected $guarded=[]//values not allowed to be inseted to
    public function department()
    {
        return $this->belongsTo(Department::class);
        // return $this->belongsTo(Department::class,forignkey); but no need to call it here
    }
}