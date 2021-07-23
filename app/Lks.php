<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lks extends Model
{
    protected $table = 'lks';
    protected $primaryKey = 'idLks';
    protected $fillable = ['idSiswa', 'idSemester', 'idKelas', 'tgl', 'jenisBayar', 'jumlahBayar'];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'idSiswa', 'idSiswa');
    }

    public function semester()
    {
        return $this->belongsTo('App\Semester', 'idSemester', 'idSemester');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'idKelas', 'idKelas');
    }
}
