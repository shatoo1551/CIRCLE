<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skillcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_level',
        'skill_value',
    ];

    public function user(){
        return $this->hasmany("App\Models\User",'skillcategory_id');
    }

}
