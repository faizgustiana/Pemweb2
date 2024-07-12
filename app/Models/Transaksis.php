<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    // Mendefinisikan field yang boleh diisi
    protected $fillable = [
        'tanggal',
        'mulai',
        'akhir',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    // Mendefinisikan relationship dengan model Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    // Mendefinisikan relationship dengan model AreaParkir
    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class, 'area_parkir_id');
    }
}
