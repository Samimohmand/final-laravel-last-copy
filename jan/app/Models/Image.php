<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gig;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'gig_id',
    ];
    
    public function gigs(){
        return $this->belongsTo(gig::class);
    }
}
