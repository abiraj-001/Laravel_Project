<?php

namespace App\Models\amazon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\amazon\amazon_product;


class Categorymodel extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $gaurded = [];



    public function search()
    {
        return $this->hasMany(amazon_product::class, 'category_id', 'id');

    }

}  
