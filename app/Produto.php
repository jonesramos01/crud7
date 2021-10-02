<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    protected $fillable = ['nome', 'custo', 'preco', 'quantidade'];
    use SoftDeletes;
    
}
