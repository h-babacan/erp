<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alıcılar extends Model
{
    use HasFactory;
    protected $table ='satinal';
    protected $primarykey ='id';

    protected $guarded=[];
}
