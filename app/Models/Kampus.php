<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampuses'; // sesuaikan dengan nama tabel di database jika berbeda

    protected $fillable = [
        'nama', 'alamat', 'latitude', 'longitude',
    ];

    // Jika Anda memerlukan timestamps (created_at dan updated_at), tambahkan baris berikut:
    // public $timestamps = true;
}
