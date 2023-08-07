<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeedBlood extends Model
{
    use HasFactory;

    public function bloods(){
        return $this->belobgsToMany(Blood::class);
     }
}
