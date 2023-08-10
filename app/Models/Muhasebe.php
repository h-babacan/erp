<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muhasebe extends Model
{
    use HasFactory;
    protected $table ='onizle';
    protected $primaryKey ='id';



    protected $guarded=[];
}
