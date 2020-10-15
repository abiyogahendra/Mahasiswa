<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable  = ['nim', 'nama', 'email', 'kelas', 'foto'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Nilai(){ 
        return $this->hasMany('App\Models\Nilai', 'nim'); 
    }
    
    // public function Pemesanan(){ 
    //     return $this->hasMany('App\Models\Pemesanan', 'idmotor'); 
    // }
        
}