<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{

    protected $table = 'nilai_mahasiswa';
    protected $primaryKey = 'id_nilai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

     protected $fillable = ['id_nilai', 'matakuliah', 'nilai', 'nim'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function Mahasiswa(){
    	return $this->belongsTo('App\Models\Mahasiswa', 'nim');
    }
        
}