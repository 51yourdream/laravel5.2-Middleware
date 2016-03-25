<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{
    public function __construct()
    {
//        $this->middleware('page');
//        $this->middleware('article');
    }

    public function getIndex(Request $request)
    {
//        $request->session()->flush();
        $request->session()->push('usernames',$request->input('name'));

        $parame = $request->all();
        echo "<pre>";
        print_r($parame);
    }
    public function getShow(Request $request)
    {
        $parames = $request->old();
        echo '<pre>';
        echo session('username1','lipeng');
       $usernames = $request->session()->get('usernames');
        var_dump($usernames);

    }
}
