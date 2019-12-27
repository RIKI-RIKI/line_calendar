<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friend;
use App\Holiday;

class FriendsController extends Controller
{  
    public function index(){
       $friends = Friend::orderBy('created_at','desc')->get();
       return view('friends.index',['friends'=> $friends]);
    }
    public function create(){
        return view('friends.create');
    }
    public function search(Request $request)
    {
        dd($request->search);
        $posts = Friends::where('title',$request->search)->paginate(5);
        
    }
    public function getHoliday(Request $request)
    {
        // 休日データ取得
        $list = Holiday::all();
       
       
        return view('friends.index', ['list' => $list]);        
    }
    
}
