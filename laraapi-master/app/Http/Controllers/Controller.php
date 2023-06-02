<?php

namespace App\Http\Controllers;

use Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        if(! Auth::user()) {
            return view('home');
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
