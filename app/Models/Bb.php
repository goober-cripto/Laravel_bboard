<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bb extends Model
{
   // use HasFactory;

   protected $fillable =['tile', 'content', 'price'];

   /*связь между Bb и USER обратная */
   public function user(){
      return $this->belongsTo(User::class);
  }
}



