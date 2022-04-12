<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SubUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('sub_user');
    }
}
