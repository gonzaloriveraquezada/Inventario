<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cotizacione;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class cotizacionesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cotizaciones = cotizacione::all();

        return view('backEnd.cotizaciones.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.cotizaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        cotizacione::create($request->all());

        Session::flash('message', 'cotizacione added!');
        Session::flash('status', 'success');

        return redirect('cotizaciones');
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
        $cotizacione = cotizacione::findOrFail($id);

        return view('backEnd.cotizaciones.show', compact('cotizacione'));
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
        $cotizacione = cotizacione::findOrFail($id);

        return view('backEnd.cotizaciones.edit', compact('cotizacione'));
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
        
        $cotizacione = cotizacione::findOrFail($id);
        $cotizacione->update($request->all());

        Session::flash('message', 'cotizacione updated!');
        Session::flash('status', 'success');

        return redirect('cotizaciones');
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
        $cotizacione = cotizacione::findOrFail($id);

        $cotizacione->delete();

        Session::flash('message', 'cotizacione deleted!');
        Session::flash('status', 'success');

        return redirect('cotizaciones');
    }

}
