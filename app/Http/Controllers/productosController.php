<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\producto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class productosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $productos = producto::all();

        return view('backEnd.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        producto::create($request->all());

        Session::flash('message', 'producto added!');
        Session::flash('status', 'success');

        return redirect('productos');
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
        $producto = producto::findOrFail($id);

        return view('backEnd.productos.show', compact('producto'));
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
        $producto = producto::findOrFail($id);

        return view('backEnd.productos.edit', compact('producto'));
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
        
        $producto = producto::findOrFail($id);
        $producto->update($request->all());

        Session::flash('message', 'producto updated!');
        Session::flash('status', 'success');

        return redirect('productos');
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
        $producto = producto::findOrFail($id);

        $producto->delete();

        Session::flash('message', 'producto deleted!');
        Session::flash('status', 'success');

        return redirect('productos');
    }

}
