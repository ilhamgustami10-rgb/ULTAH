<?php 

// app/Models/Hope.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hope extends Model
{
    use HasFactory;
    
    // Kolom yang boleh diisi melalui mass assignment
    protected $fillable = [
        'sender_name',
        'content',
        'is_private',
    ];
}