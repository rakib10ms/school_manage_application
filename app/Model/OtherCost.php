<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OtherCost extends Model
{
    protected $table = 'other_costs';
    protected $fillable  = ['date','amount','description','image'];

}
