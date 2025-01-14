<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employers extends Model
{
    use HasFactory;

    public function jobs(){
        return $this->hasMany(Jobs::class, 'employer_id');  // Correct way to specify foreign key
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
