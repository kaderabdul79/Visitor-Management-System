<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function index(){
        $data = User::findOrFail(Auth::user()->id);
        // return view('auth.profile', compact('data'));
        return view('auth.profile')->with('data',$data);

    }

function edit_validation(Request $request){

    $request->validate([
        'email' => 'required|email',
        'name' => 'required'
    ]);

    $data = $request->all();

    if(!empty($data['password'])){

        $form_data = array([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password'    =>  Hash::make($data['password'])
        ]);

    }else{
        $form_data = array([
            'name'  =>  $data['name'],
            'email' =>  $data['email']
        ]);
    }
    $userd = User::whereId(Auth::user()->id);
    // $user = User::find($userd);
 
    // $user->name = 'Paris to Londo5n';
    // $user->email = 'aede';
 
    // $user->save();
    // return $userd;
    User::whereId(Auth::user()->id)->update($form_data);
    return redirect('profile')->with('success','Profile Data Updated');

    }

}
