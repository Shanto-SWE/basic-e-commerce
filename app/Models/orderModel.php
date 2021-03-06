<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderModel extends Model
{
    public $table='orders';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
    use HasFactory;
}
