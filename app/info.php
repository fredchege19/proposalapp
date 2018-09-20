<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $fillable = ['title', 'organisation', 'address', 'phone', 'email', 'submitted_by', 'summary', 'background','activities','background','budget' ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


