<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tipo_producto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class tipo_productoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tipo_producto = tipo_producto::all();

        return view('backEnd.tipo_producto.index', compact('tipo_producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.tipo_producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        tipo_producto::create($request->all());

        Session::flash('message', 'tipo_producto added!');
        Session::flash('status', 'success');

        return redirect('tipo_producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipo_producto = tipo_producto::findOrFail($id);

        return view('backEnd.tipo_producto.show', compact('tipo_producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipo_producto = tipo_producto::findOrFail($id);

        return view('backEnd.tipo_producto.edit', compact('tipo_producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $tipo_producto = tipo_producto::findOrFail($id);
        $tipo_producto->update($request->all());

        Session::flash('message', 'tipo_producto updated!');
        Session::flash('status', 'success');

        return redirect('tipo_producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipo_producto = tipo_producto::findOrFail($id);

        $tipo_producto->delete();

        Session::flash('message', 'tipo_producto deleted!');
        Session::flash('status', 'success');

        return redirect('tipo_producto');
    }

}
