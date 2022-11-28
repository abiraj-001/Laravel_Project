<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweety extends Model
{
    use HasFactory;
    
    protected $table ='tweets';

    protected $fillable = ['user_id','body'];

public function user(){
    return $this->belongsTo(User::class);
}


}
