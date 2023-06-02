<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Session;
use Alert;

class VisitorController extends Controller
{
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['status'] = 'I';
        Visitor::create($input);

        Alert::success('Success', 'Your form has been successfully sent.')->autoclose(3000);

        return redirect()->back();
    }
}
