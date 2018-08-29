<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class draft extends Model
{
    protected $fillable = ['title', 'organisation', 'address', 'phone', 'email', 'submitted_by', 'summary', 'background','activities','background','budget' ];
}
