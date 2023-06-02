<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Visitor;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;
 use Carbon\Carbon;

class EmployeController extends Controller
{
    // public function __construct(){
        // $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $Visitor = Visitor::all();
      

        return view ('Visitor.index')->with('Visitor', $Visitor);
    //     $Visitor = App\Models\Visitor::all();
    // return view('Visitor.index', ['Visitor' => $Visitor]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('Visitor.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        
        // Set the default status to "pending"
        $input['status'] = 'pending';
        
        Visitor::create($input);
        
        return redirect('Visitor')->with('flash_message', 'Visitor Added!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $Visitor = Visitor::find($id);
        
        return view('Visitor.show')->with('Visitor', $Visitor);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $Visitor = Visitor::find($id);
        return view('Visitor.edit')->with('Visitor', $Visitor);
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id):RedirectResponse
    {
        $Visitor = Visitor::find($id);
        $input = $request->all();
        $Visitor->update($input);
        return redirect('Visitor')->with('flash_message', 'Visitor Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Visitor::destroy($id);
        return redirect('Visitor')->with('flash_message', 'Visitor deleted!');
    }


}