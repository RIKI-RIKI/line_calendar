<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class FriendsController extends Controller
{   
    public function index(){
        return view('friends.index');
    }
    public function create(){
        return view('friends.create');
    }
    public function store(Request $request){
        $params = $request->validate([
                
        ]);
        
            
        
        return redirect()->route('index');
    }
}
