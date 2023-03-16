<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'value', 'purchased', 'personID'];

    public function person()
    {
        return $this->belongsTo('App\Models\Person','personID');
    }
}
