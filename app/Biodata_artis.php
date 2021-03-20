<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata_artis extends Model
{
    //
    //protected $table = 'mahasiswa';
 

    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'foto', 'alamat_tinggal', 'id_kecamatan'];
}
