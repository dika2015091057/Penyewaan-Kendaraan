<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\role;


class admin extends Model
{
    use HasFactory;

    public function admin(){
        return $this->belongsTo(role::class);
    }
}
