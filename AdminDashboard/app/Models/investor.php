<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investor extends Model
{
    use HasFactory;
    protected $table='investors';
    protected $primaryKey = 'investor_id';
    public $timestamps = false;
}
