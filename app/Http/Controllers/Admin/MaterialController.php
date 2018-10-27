<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Material;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MaterialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material = Material::all();

        return view('backEnd.admin.material.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['description' => 'required', ]);

        Material::create($request->all());

        Session::flash('message', 'Material added!');
        Session::flash('status', 'success');

        return redirect('admin/material');
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
        $material = Material::findOrFail($id);

        return view('backEnd.admin.material.show', compact('material'));
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
        $material = Material::findOrFail($id);

        return view('backEnd.admin.material.edit', compact('material'));
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
        $this->validate($request, ['description' => 'required', ]);

        $material = Material::findOrFail($id);
        $material->update($request->all());

        Session::flash('message', 'Material updated!');
        Session::flash('status', 'success');

        return redirect('admin/material');
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
        $material = Material::findOrFail($id);

        $material->delete();

        Session::flash('message', 'Material deleted!');
        Session::flash('status', 'success');

        return redirect('admin/material');
    }

}
