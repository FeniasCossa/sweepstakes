<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "swepstakes_id",
        "name",
        "email"
        ];

        public function swepstake(){
            return $this -> belongsTo(Swepstake::class);
        }

}
