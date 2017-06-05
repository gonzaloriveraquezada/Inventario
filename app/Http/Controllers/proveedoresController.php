<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\proveedore;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class proveedoresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $proveedores = proveedore::all();

        return view('backEnd.proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        proveedore::create($request->all());

        Session::flash('message', 'proveedore added!');
        Session::flash('status', 'success');

        return redirect('proveedores');
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
        $proveedore = proveedore::findOrFail($id);

        return view('backEnd.proveedores.show', compact('proveedore'));
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
        $proveedore = proveedore::findOrFail($id);

        return view('backEnd.proveedores.edit', compact('proveedore'));
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
        
        $proveedore = proveedore::findOrFail($id);
        $proveedore->update($request->all());

        Session::flash('message', 'proveedore updated!');
        Session::flash('status', 'success');

        return redirect('proveedores');
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
        $proveedore = proveedore::findOrFail($id);

        $proveedore->delete();

        Session::flash('message', 'proveedore deleted!');
        Session::flash('status', 'success');

        return redirect('proveedores');
    }

}
