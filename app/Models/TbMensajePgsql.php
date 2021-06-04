<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbMensajePgsql extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';
    protected $table ='tb_mensaje';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = ['name', 'lastname', 'desc_mensaje'];
}
