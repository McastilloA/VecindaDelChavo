<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vecinda;

class HomeController extends Controller
{   	
    public function index()
    {
        $Residents = Vecinda::orderBy('id', 'ASC')->paginate(5);
        // $Residents = Vecinda::orderBy('name')->get();
        return view('vecinda.index', compact('Residents'));
    }

    public function create ()
    {
        return view('vecinda.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[ 'title'=>'required', 'name'=>'required', 'nickname'=>'required', 'image'=>'required|image', 'description'=>'required']);

        $Residents = (new Vecinda)->fill( $request->all() );

        if ($request->hasFile('image')) 
        {
            $Residents->image = $request ->file('image')->store('public');
        }

        $Residents->save();

        return redirect()->route('vecinda.index')->with('success','Creado satisfactoriamente');
    }

    public function show($id)
    {
        $Residents = Vecinda::find($id);

        return view('vecinda.show', compact('Residents'));
    }

    public function edit($id)
    {
        $Residents = Vecinda::find($id);
        return view('vecinda.edit', compact('Residents'));
    }

    public function update(Request $request, $id) 
    {
        $this->validate($request,[ 'title'=>'required', 'name'=>'required', 'nickname'=>'required', 'image'=>'image', 'description'=>'required']);
        $Residents = Vecinda::find($id);

        if ($request->hasFile('image')) 
        {
            $Residents->image = $request ->file('image')->store('public');
        }

        $Residents->update($request ->only('title', 'name', 'nickname', 'apartament', 'description'));
        return redirect()->route('vecinda.index')->with('success','Actualizado satisfactoriamente');
 
    }

    public function destroy($id)
    {
        Vecinda::find($id) -> delete();

        return back()->with('info', 'Eliminado Satisfactoriamente');
    }

}
