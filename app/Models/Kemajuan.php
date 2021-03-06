<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    use HasFactory;
   protected $table = 'kemajuan';
   protected $guarded = ['id'];

   public function santri(){
    return $this->belongsTo('App\Models\santri', 'id_santri');
}

public function pengurus(){
    return $this->belongsTo('App\Models\Pengurus', 'id_pengurus');
}




}
