<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    //
    protected $fillable =[
        'nama_kandidat', 'visi', 'misi', 'nip', 'votes', 'created_at', 'updated_at' , 'fotoprofil', 'dpd'
    ];

    protected $table = 'kandidat';


}
