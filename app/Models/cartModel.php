<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    public $table='cart';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
    use HasFactory;
}