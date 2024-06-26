<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gig extends Model
{
    use HasFactory;
    protected $fillable=[
     'title',
     'description',
     'add_information',
     'les_price',
     'large_price',
    ];
    public function images(){
        return $this->hasMany(Image::class);
    }
}
