<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaJadwal extends Model
{
    use HasFactory;

    protected $table = 'peserta_jadwal';

    protected $fillable = ['jadwal_id', 'user_id'];
}
