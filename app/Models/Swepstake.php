<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Swepstake extends Model
{
    use HasFactory;

    protected $fillable =[
        "user_id",
        "number_of_winners",
        "end_date",
        "description"
    ];

    protected $keyType="string";
    public $incrementing=false;
}
