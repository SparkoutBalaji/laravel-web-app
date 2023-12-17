<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    protected $fillable = ['name','age','phone','email','file_path','address'];
}
