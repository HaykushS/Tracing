<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptag extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'tag_id',
    ] ;
}
