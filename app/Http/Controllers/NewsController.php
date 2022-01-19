<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events\UserSubscribed;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index');
    }

  public function subscribe(Request $request){

    // 
    $request->validate([
        'email'=>'required|unique:newsletter,email'
    ]);

    event(new UserSubscribed($request->input('email')));

    return back();
  }
}
