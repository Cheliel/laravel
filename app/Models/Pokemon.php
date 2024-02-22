<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    //table name 
    protected $table = "Pokemons";

    protected $pirmaryKey = "id";
    //type of primary key 
   // protected $keyType = 'string';

//    protected $incrementing = TRUE;

    //atribute that are mass assgnable
//   protected $fillable = [ 
//         'champ1', 'champ2'
//     ];

    //hide attribute for arrays
    // protected $hidden = [
    //     'champ1',
    // ];
    
}
