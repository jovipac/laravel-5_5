<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Material_Provider;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Material_ProvidersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $material_providers = Material_Provider::all();

        return view('backEnd.material_providers.index', compact('material_providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.material_providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['material_id' => 'required', 'provider_id' => 'required', ]);

        Material_Provider::create($request->all());

        Session::flash('message', 'Material_Provider added!');
        Session::flash('status', 'success');

        return redirect('material_providers');
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
        $material_provider = Material_Provider::findOrFail($id);

        return view('backEnd.material_providers.show', compact('material_provider'));
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
        $material_provider = Material_Provider::findOrFail($id);

        return view('backEnd.material_providers.edit', compact('material_provider'));
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
        $this->validate($request, ['material_id' => 'required', 'provider_id' => 'required', ]);

        $material_provider = Material_Provider::findOrFail($id);
        $material_provider->update($request->all());

        Session::flash('message', 'Material_Provider updated!');
        Session::flash('status', 'success');

        return redirect('material_providers');
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
        $material_provider = Material_Provider::findOrFail($id);

        $material_provider->delete();

        Session::flash('message', 'Material_Provider deleted!');
        Session::flash('status', 'success');

        return redirect('material_providers');
    }

}
