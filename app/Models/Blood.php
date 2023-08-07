<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'blood_type',
        'location',
        'phone_number',
        'email'
    ];

    public function needBloods(){
       return $this->belobgsToMany(NeedBlood::class);
    }
}
