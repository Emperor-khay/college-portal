<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'description', 'department_id', 'level'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
