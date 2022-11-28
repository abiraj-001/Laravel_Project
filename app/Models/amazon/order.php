<?php

namespace App\Models\amazon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = ['user_id','category_id','products_id','user_name','is-status'];

}
