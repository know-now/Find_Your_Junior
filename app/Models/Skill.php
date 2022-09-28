<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public $specializations = [
        "Front end", "Back end", "Full Stack"
    ];
    public function candidates()
    {
        return $this->belongsToMany(Candidate::class);
    }
}
