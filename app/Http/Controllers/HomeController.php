<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()){
            return view('addnew');
           }
        return view('auth/login');
        
    }
    public function edit(Request $request, Item $item)
    {
        
        return view('edit', ['item' => $item]);
    }
    public function show(Request $request, Item $item)
    {
        
        return view('show', ['item' => $item]);
    }
    public function edited(Request $request, Item $item)
    {
        item::whereId($request->id)->update(["number"=>$request->number,"invoice"=>$request->invoice,"supply"=>$request->supply,"description"=>$request->description]);
        return redirect()->route('home');
    }
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'invoice' => 'required',
            'supply' => 'required',
            'description' => 'required'
        ]);
        $item = new Item;
        
        $item->number = $request->get('number');
        $item->invoice = $request->get('invoice');
        $item->supply = $request->get('supply');
        $item->description = $request->get('description');
        
        $item->save();

        return redirect()->route('home');
    }
    public function destroy(Request $request, Item $item)
    {
        $res = Item::where('id', $item->id)->delete();
        $items = Item::paginate(15);;
        return view('home', [
            'items' => $items
        ]);
    }
}
