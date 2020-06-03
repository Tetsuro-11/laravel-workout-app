<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;
use App\User;
use Auth;

class MemosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){
        // $memos = Memo:: orderBy('created_at', 'desc')->get();
        $memos = Memo::latest()->paginate(5);
        return view('memos.index', ['memos'=> $memos]);
    }

    public function create(){
        return view('memos.create');
    }

    public function store(Request $request){
        $content = $request->validate(['content' => 'required|max:500']);
        // Memo::create($content);
        // return redirect()->route('memos.index');
        $memo = new Memo;
        $memo->content = $request->content;
        $memo->user_id = $request->user()->id;
        $memo->save();
        return redirect()->route('memos.mypage', Auth::user()->name);
    }

    public function edit(Request $request){
        $memo = Memo::find($request->id);
        return view('memos.edit', ['memo'=>$memo]);
    }

    public function update(Request $request){
        $memo = Memo::find($request->id);
        $content = $request->validate(['content'=>'required|max:500']);
        $memo->fill($content)->save();
        return redirect()->route('memos.mypage',Auth::user()->name);
    }

    public function delete(Request $request){
        $memo = Memo::find($request->id);
        $memo->delete();
        return redirect()->route('memos.mypage',Auth::user()->name);
    }
    
    public function mypage($user){
        $memos = User::find($user)->memos()->paginate(5);
        // $memos = Memo::where('user_id', 1)->paginate(2);
        return view('memos.index', ['memos'=> $memos]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // $stock = $request->input('stock');
 
        $query = Memo::query();
 
        if (!empty($keyword)) {
            $query->where('content', 'LIKE', "%{$keyword}%");
        }
 
        $memos = $query->paginate(5);
 
        return view('memos.index', ['memos'=>$memos]);
    }
}
