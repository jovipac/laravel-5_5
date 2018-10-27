<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Material_Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Material_CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_categories = Material_Category::all();

        return view('backEnd.admin.material_categories.index', compact('material_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.material_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Material_Category::create($request->all());

        Session::flash('message', 'Material_Category added!');
        Session::flash('status', 'success');

        return redirect('admin/material_categories');
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
        $material_category = Material_Category::findOrFail($id);

        return view('backEnd.admin.material_categories.show', compact('material_category'));
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
        $material_category = Material_Category::findOrFail($id);

        return view('backEnd.admin.material_categories.edit', compact('material_category'));
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
        $this->validate($request, ['name' => 'required', ]);

        $material_category = Material_Category::findOrFail($id);
        $material_category->update($request->all());

        Session::flash('message', 'Material_Category updated!');
        Session::flash('status', 'success');

        return redirect('admin/material_categories');
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
        $material_category = Material_Category::findOrFail($id);

        $material_category->delete();

        Session::flash('message', 'Material_Category deleted!');
        Session::flash('status', 'success');

        return redirect('admin/material_categories');
    }

}
