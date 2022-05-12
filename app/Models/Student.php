<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'cne';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'cne', 'cin', 'nom', 'naissance', 'filiere', 'email'
    ];
    use HasFactory;
}
