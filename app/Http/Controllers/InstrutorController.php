<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instrutor;

class InstrutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $instrutores = Instrutor::all();
       return view('instrutores.index')->with(['instrutores'=>$instrutores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instrutores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instrutores = Instrutor::create($request->all());
        return redirect()->route('instrutores.index')->with(['instrutores'=>$instrutores]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrutores = Instrutor::find($id);
        return view('instrutores.edit')->with(['instrutores' => $instrutores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instrutores = Instrutor::find($id)->update($request->all());
        return redirect()->route('instrutores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrutores = Instrutor::find($id)->delete();
        return redirect()->route('instrutores.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
