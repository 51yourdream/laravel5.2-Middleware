<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Page;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function __construct()
    {
//        $this->middleware('page');
//        $this->middleware('article');
    }

    public function getIndex(Request $request)
    {
        $parameters = $request->all();
        $title = array_get($parameters,'title');
        $id = array_get($parameters,'id');
        $query = DB::table('pages');
        if($title){
            $query->where('title','like','%'.$title.'%');
        }
        if($id){
            $query->where('id',$id);
        }
        $pages = $query->paginate(2);
        return view('page.index')->withPages($pages)->withParameters($parameters);
    }
    public function getShow(Request $request)
    {
        $page = DB::table('pages')->lists('title');
        var_dump($page);
        $page1 = DB::table('pages')->lists('title','content');
        var_dump($page1);

    }
}
