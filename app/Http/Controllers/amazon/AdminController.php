<?php

namespace App\Http\Controllers\amazon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\amazon\Categorymodel;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct(Categorymodel $categoryall){
        $category = $categoryall->all();
        View::share('category',  $category);
    }
    public function index(){
            return view('amazon.admin');
    }
    public function categoryadd(){
            return view('amazon.category_add');
     }
     public function categoryupdate(){
        return view('amazon.category_update');
     }
   public function categoryremove(){
    return view('amazon.category_remove');
    } 
    public function productadd(){
        return view('amazon.product_remove');
        } 
        public function productupdate(){
            return view('amazon.product_remove');
            } 
            public function productremove(){
                return view('amazon.product_remove');
                } 
}
