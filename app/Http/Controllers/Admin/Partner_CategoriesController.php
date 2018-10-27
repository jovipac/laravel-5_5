<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Partner_Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Partner_CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $partner_categories = Partner_Category::all();

        return view('backEnd.admin.partner_categories.index', compact('partner_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.partner_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Partner_Category::create($request->all());

        Session::flash('message', 'Partner_Category added!');
        Session::flash('status', 'success');

        return redirect('admin/partner_categories');
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
        $partner_category = Partner_Category::findOrFail($id);

        return view('backEnd.admin.partner_categories.show', compact('partner_category'));
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
        $partner_category = Partner_Category::findOrFail($id);

        return view('backEnd.admin.partner_categories.edit', compact('partner_category'));
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

        $partner_category = Partner_Category::findOrFail($id);
        $partner_category->update($request->all());

        Session::flash('message', 'Partner_Category updated!');
        Session::flash('status', 'success');

        return redirect('admin/partner_categories');
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
        $partner_category = Partner_Category::findOrFail($id);

        $partner_category->delete();

        Session::flash('message', 'Partner_Category deleted!');
        Session::flash('status', 'success');

        return redirect('admin/partner_categories');
    }

}
