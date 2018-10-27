<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Measure;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class MeasuresController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $measures = Measure::all();

        return view('backEnd.admin.measures.index', compact('measures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.measures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'unit' => 'required', ]);

        Measure::create($request->all());

        Session::flash('message', 'Measure added!');
        Session::flash('status', 'success');

        return redirect('admin/measures');
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
        $measure = Measure::findOrFail($id);

        return view('backEnd.admin.measures.show', compact('measure'));
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
        $measure = Measure::findOrFail($id);

        return view('backEnd.admin.measures.edit', compact('measure'));
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
        $this->validate($request, ['name' => 'required', 'unit' => 'required', ]);

        $measure = Measure::findOrFail($id);
        $measure->update($request->all());

        Session::flash('message', 'Measure updated!');
        Session::flash('status', 'success');

        return redirect('admin/measures');
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
        $measure = Measure::findOrFail($id);

        $measure->delete();

        Session::flash('message', 'Measure deleted!');
        Session::flash('status', 'success');

        return redirect('admin/measures');
    }

}
