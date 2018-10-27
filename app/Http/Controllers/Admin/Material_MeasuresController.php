<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Material_Measure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Material_MeasuresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_measures = Material_Measure::all();

        return view('backEnd.admin.material_measures.index', compact('material_measures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.material_measures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Material_Measure::create($request->all());

        Session::flash('message', 'Material_Measure added!');
        Session::flash('status', 'success');

        return redirect('admin/material_measures');
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
        $material_measure = Material_Measure::findOrFail($id);

        return view('backEnd.admin.material_measures.show', compact('material_measure'));
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
        $material_measure = Material_Measure::findOrFail($id);

        return view('backEnd.admin.material_measures.edit', compact('material_measure'));
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
        
        $material_measure = Material_Measure::findOrFail($id);
        $material_measure->update($request->all());

        Session::flash('message', 'Material_Measure updated!');
        Session::flash('status', 'success');

        return redirect('admin/material_measures');
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
        $material_measure = Material_Measure::findOrFail($id);

        $material_measure->delete();

        Session::flash('message', 'Material_Measure deleted!');
        Session::flash('status', 'success');

        return redirect('admin/material_measures');
    }

}
