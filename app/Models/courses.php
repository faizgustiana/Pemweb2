<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    // mendefinisikan field yang boleh diisi
    protected $fillable = ['name', 'description', 'category'];
}
