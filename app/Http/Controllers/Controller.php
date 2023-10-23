<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function home(){
        $news= News::all();

        return view('home', compact(['news']));
    }

    function index(){
        $news= News::all();
        return  view('admin.newstable', compact(['news']));
    }

    public function store(Request $request)
    {

        News::create([
            'title'=> $request->title,
            'body' => $request->content,
            'author'=>$request->author,
            'picture'=> $request->picture]);
            return redirect()->back();
    }

    function edit($id){
        $news= News::find($id);
        return view('admin.edit', compact(['news']));

     }

     function update(Request $request){
        News::where('id', $request->id)->update([
            'title'=>$request->title,
            'body'=>$request->content,
            'author'=>$request->author,
            'picture'=>$request->picture
        ]);
        return redirect('admin/news')->  with ('update successfully');


    }

    function delete(Request $request){
        // return('working');
        News::where('id', $request->id)->delete();
        return redirect('admin/news')->  with ("delete successfully");

    }
    public function post(){
        return view('admin.create');
    }

}
