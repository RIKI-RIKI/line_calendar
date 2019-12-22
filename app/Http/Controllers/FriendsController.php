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
        dd($request);
        $params = $request->validate([
                'name' => 'required|max:256',
                'memo' => 'required|max:256',
                
        ]);
        
            
        
        return redirect()->route('friends.index');
    }
}
