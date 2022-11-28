<?php

namespace App\Http\Controllers\amazon;


use delete;
use App\Models\User;
use App\Models\amazon\order;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\amazon\Categorymodel;
use Illuminate\Support\Facades\View;
use App\Models\amazon\amazon_product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use PDO;

class Categorycontroller extends Controller
{
    public function __construct(Categorymodel $categoryall){
        $category = $categoryall->all();
        
        View::share('category',  $category);
    }


    public function user(){
        // "avatar": "http://abiraj_aprtrdev.test/storage/avatar/OXd4CdKrtYv6LnvISandUBK951ZlkqqAi7zdM6Lt.jpg",
        $user_name = auth()->user()->name;
        $user_lists = DB::table('users')->select('name','id','username','email','avatar')
         ->where('name','=',$user_name )->get();

         return view('amazon.user', compact('user_lists'));


    }

    
    public function indexes(){

        // $category = Categorymodel::all();
    $category = DB::table('category')->select('category_list','id','slug_name','category_images')->get();
        // dd($category);

        return view('amazon.welcome', compact('category'));
    }




    public function show(Request $req){
     $category_products = amazon_product::where('category_id', '=', $req->id)->get();
        return response($category_products);
    }


   public function showed(Request $req){

        $products_show = amazon_product::where('id', '=', $req->id)->get();
        return response($products_show);
    }


    public function searched(Request $reqs)
    {

        $products = Categorymodel::with('search')->where('category_list','=' , $reqs->selectedCategory)->orwhere('category_list','=' , $reqs->searchproduct)->get();
        $SearchProducts = $products[0]->search;

        if($searchproduct = '' && $SearchProducts = 'ALL'  ){
            return $SearchProducts ;
        }

        // elseif($SearchProducts){
        //     return view ('amazon.search', compact('SearchProducts','products'));
        // }


          return view ('amazon.search', compact('SearchProducts','products'));
    }

    public function category($id){
        // dd($proid);

            $category_products = amazon_product::find($id);
  
            return view('amazon.product', compact('category_products'));
    }


    public function addcart(Request $req){
       $data = amazon_product::find($req->addcart);
       $user_id = auth()->user()->id;
       $user_name = auth()->user()->name;
       $category_id=$data->category_id;
       $product_id=$data->id;
       $values =[
        'user_id' => $user_id,
        'user_name' => $user_name,
        'category_id'=>$category_id,
        'products_id'=>$product_id,
        'is-status'=> 0
            ];

        order::create($values);  
        Session::flash('message','Add to cart successfully updated');
        return redirect ('/amazon/product/'.$product_id.'');
        // return redirect ('/amazon/add-cart');

    }




    public function buycart(Request $req){
        $data = amazon_product::find($req->buy);
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;
        $category_id = $data->category_id;
        $product_id = $data->id;
        $values =[
        'user_id' => $user_id,
        'user_name' => $user_name,
        'category_id'=>$category_id,
        'products_id'=>$product_id,
        'is-status'=> 1
            ];

        order::create($values);  
        Session::flash('buy_message','Buy successfully updated');
        

        return redirect ('/amazon/product/'.$product_id.'');
        // return redirect ('/amazon/buy-product');

    }


    public function favorite(Request $req){
       
        $data = amazon_product::find($req->favorite);
      // return $data;
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;
        $category_id = $data->category_id;
        $product_id = $data->id;
        $values =[
        'user_id' => $user_id,
        'user_name' => $user_name,
        'category_id'=>$category_id,
        'products_id'=>$product_id,
        'is-status'=>2
            ];

        order::create($values);  
        Session::flash('fav_message','Favorite successfully updated');
        return redirect ('/amazon/product/'.$product_id.'');

       // return redirect ('/amazon/favorite-list');

    }


    public function   showaddcart(){
            $showcart = order::join('amazon_products','amazon_products.id','=','orders.products_id')
            ->join('category','category.id','=','orders.category_id')
            ->select('amazon_products.product_brand','amazon_products.product_images','amazon_products.product_price','amazon_products.specification','category.category_list','amazon_products.id')
            ->where('orders.is-status','=','0')
            ->where('orders.user_id','=',auth()->id())
            ->distinct()
            ->get();
       // return $showcart;
        return view('amazon.cart',compact('showcart'));
       
    }


    public function   buyproduct(){

        $showcart = order::join('amazon_products','amazon_products.id','=','orders.products_id')
        ->join('category','category.id','=','orders.category_id')
        ->select('amazon_products.product_brand','amazon_products.product_images','amazon_products.product_price','amazon_products.specification','category.category_list','amazon_products.id')
        ->where('orders.is-status','=','1')
        ->where('orders.user_id','=',auth()->id())
        ->distinct()
        ->get();
   // return $showcart;
    return view('amazon.buy',compact('showcart'));
   
}



public function   favoritelist(){

    $showcart = order::join('amazon_products','amazon_products.id','=','orders.products_id')
    ->join('category','category.id','=','orders.category_id')
    ->select('amazon_products.product_brand','amazon_products.product_images','amazon_products.product_price','amazon_products.specification','category.category_list','amazon_products.id')
    ->where('orders.is-status','=','2')
    ->where('orders.user_id','=',auth()->id())
    ->distinct()
    ->get();
// return $showcart;
return view('amazon.favorite',compact('showcart'));

}

public function   removecart(Request $req){ 
// dd($req->cartremove) ;     
 order::query()
->where('orders.products_id','=',$req->cartremove)
->where('orders.is-status','=','0')
->where('orders.user_id','=',auth()->id())
->delete();
Session::flash('remove_cart_message','Cart Product successfully Removed');
 
 return Redirect::back();
}

public function   removefavorite(Request $req){
     order::query()
    ->where('orders.products_id','=',$req->favoriteremove)
    ->where('orders.is-status','=','2')
    ->where('orders.user_id','=',auth()->id())
    ->delete();
    Session::flash('remove_cart_message','Favorite Product successfully Removed');
     
     return Redirect::back();

}



public function   removebuy(Request $req){
    order::query()
   ->where('orders.products_id','=',$req->buyremove)
   ->where('orders.is-status','=','1')
   ->where('orders.user_id','=',auth()->id())
   ->delete();
   Session::flash('remove_buy_message','Purchase Product successfully Removed');
    
    return Redirect::back();

}




public function buyaddcart(Request $req){
    // return $req;
      $data = amazon_product::find($req->buyaddcart);
      $user_id = auth()->user()->id;
      $user_name = auth()->user()->name;
      $category_id = $data->category_id;
      $product_id=$data->id;
      $values =[
       'user_id' => $user_id,
       'user_name' => $user_name,
       'category_id'=>$category_id,
       'products_id'=>$product_id,
       'is-status'=> 1
    ];

       order::create($values);  
       Session::flash('message','Add to cart to purchase has successfully updated');
       //return redirect ('/amazon/product/'.$product_id.'');
       return redirect ('/amazon/add-cart');

   }

   public function buyfavoritecart(Request $req){
    // return $req;
      $data = amazon_product::find($req->buyfavoritecart);
      $user_id = auth()->user()->id;
      $user_name = auth()->user()->name;
      $category_id = $data->category_id;
      $product_id=$data->id;
      $values =[
       'user_id' => $user_id,
       'user_name' => $user_name,
       'category_id'=>$category_id,
       'products_id'=>$product_id,
       'is-status'=> 1
    ];

       order::create($values);  
       Session::flash('buy_message','Favorite to purchase has successfully updated');
       //return redirect ('/amazon/product/'.$product_id.'');
       return redirect ('/amazon/favorite-list');

   }


   public function cartfavoritecart(Request $req){
    // return $req;
      $data = amazon_product::find($req->addfavoritecart);
      $user_id = auth()->user()->id;
      $user_name = auth()->user()->name;
      $category_id = $data->category_id;
      $product_id=$data->id;
      $values =[
       'user_id' => $user_id,
       'user_name' => $user_name,
       'category_id'=>$category_id,
       'products_id'=>$product_id,
       'is-status'=> 0
    ];

       order::create($values);  
       Session::flash('favorite_message','Favorite to Add to cart has successfully updated');
       //return redirect ('/amazon/product/'.$product_id.'');
       return redirect ('/amazon/favorite-list');

   }

   public function prime(){

   DB::table('users')->where('users.id',auth()->id())->update(['admin' => '2']);

   Session::flash('prime_message','Your Prime has successfully added,..Now You are Prime User ');
   return redirect ('/amazon');


   }

   public function notprime(){

    DB::table('users')->where('users.id',auth()->id())->update(['admin' => '0']); 
 
    Session::flash('prime_not_message','Your Prime has successfully removed,..Now You are Not Prime User ');
    return redirect ('/amazon');
 
 
    }
}
