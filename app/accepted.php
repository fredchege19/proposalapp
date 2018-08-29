<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accepted extends Model
{
    protected $fillable = ['title', 'organisation_name', 'address', 'phone', 'email', 'submitted_by', 'summary', 'background','activities','background','budget' ];
}
