<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        if (!app()->runningConsole()) {
            self::creating(function ($table) {
                $table->user_id = auth()->id();
            });
        }
    }
}
