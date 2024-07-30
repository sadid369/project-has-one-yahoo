<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone_Number extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $guarded = [];
    protected $table = "phone_numbers";
}
