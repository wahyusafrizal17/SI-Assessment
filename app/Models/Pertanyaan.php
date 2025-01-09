<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';

    protected $fillable = ['pertanyaan', 'jenis'];

    public function jawaban(){
        return $this->belongsTo(Jawaban::class, 'id', 'pertanyaan_id')->where('user_id', \Auth::user()->id);
    }
}
