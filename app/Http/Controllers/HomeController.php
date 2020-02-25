<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::paginate(15);;
        return view('home', [
            'items' => $items
        ]);
    }
    public function addnew()
    {
        return view('addnew');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Number' => 'required',
            'Invoice' => 'required',
            'Supply' => 'required',
            'Description' => 'required'
        ]);
        $item = new Item;
        
        $item->Number = $request->get('Number');
        $item->Invoice = $request->get('Invoice');
        $item->Supply = $request->get('Supply');
        $item->Description = $request->get('Description');
        
        $item->save();

        return redirect()->route('home');
    }
    
}
