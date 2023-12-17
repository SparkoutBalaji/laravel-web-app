<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    protected $fillable = ['name','age','phone','email','file_path','address'];

    public function getemailattribute($value)
    {
        return strtoupper($value);
    }

    public function setphoneattribute($value)
    {
        $this->attributes['phone'] = "91".$value; //+91 is not able to assign bcoz, on migration phone is a unsignedBigInteger
    }
}
