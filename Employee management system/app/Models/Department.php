<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey ="dept_num";

    public function employees()
    {
        return $this->hasMany(Employee::class, 'dept_id', 'dept_num');
    }
}
