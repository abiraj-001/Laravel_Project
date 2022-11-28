<?php

namespace App\Models\amazon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class amazon_product extends Model
{
    use HasFactory;
    protected $table = 'amazon_products';

    protected $gaurded = [];
    
}
