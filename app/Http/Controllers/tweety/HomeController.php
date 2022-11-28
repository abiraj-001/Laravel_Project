<?php

namespace App\Http\Controllers\tweety;
use Auth;
use App\Models\User;
use App\Models\Tweety;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('tweety.index',[
        
            'tweets'=>auth()->User()->timeline()
        ]);
    }
    public function store(Request $req)
    {
        $req->validate([
         'body' => 'required| max:255'
        ]);
        // $Tweety = new Tweety;
        // $Tweety->body=$req->body;
        // $Tweety->save();
        // Session ::flash('message','create success');
        // Session ::flash('class','success');
        // DB::insert('insert into tweets (body) values(?)',['hiii']);
        // return redirect()->to('home');
        // echo "Record inserted successfully.<br/>";

        Tweety::create([
            'user_id'=>auth()->id(),
            'body'=>$req->body
        ]);
        return redirect()->to('tweets');;
    }

    public function show(User $user){
      
        return view('tweety.show',[
            'user'=> $user,
           'tweets'=> $user->tweets()->simplepaginate(6),
        ]); 
        
    }


    
    public function save(User $user){
        auth()->user()->toggleFollow($user);


        return back();

    }

    public function edit(User $user)
    {
     $this->authorize('edit', $user);
        return view('tweety.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user),
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['image'],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:255',
                'confirmed',
            ],
        ]);

        if (request('avatar')) {

            $image_name = $attributes['avatar'];
            $fileName = pathinfo($image_name->getClientOriginalName(), PATHINFO_FILENAME);

            $fullFileName = $fileName."-".time().".".$image_name->getClientOriginalExtension();
            $image_name->move(public_path('/storage/avatar'), $fullFileName);

            $attributes['avatar'] = 'avatar/'.$fullFileName;
            
        }

        $user->update($attributes);

        return redirect($user->path());
    }




    public function explore()
    {
        
        return view('tweety.explore',[

            'users'=>User::simplepaginate(10),
            'tweety'=>Tweety::simplepaginate(10)
            
        ]);
    }


    
    
}
