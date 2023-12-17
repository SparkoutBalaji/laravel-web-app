<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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
    public static function boot()
    {
        parent::boot();

        static::creating(function($item){
            Log::info("creating event is fired".$item);
        });
        static::created(function($item){
            Log::info("created event is fired".$item);
        });
        static::updating(function($item){
            Log::info("updating event is fired".$item);
        });
        static::updated(function($item){
            Log::info("updated event is fired".$item);
        });
        static::deleting(function($item){
            Log::info("deleting event is fired".$item);
        });
        static::deleted(function($item){
            Log::info("deleted event is fired".$item);
        });
        static::saving(function($item){
            Log::info("updated event is fired".$item);
        });
        static::saved(function($item){
            Log::info("updated event is fired".$item);
        });
    }
}
