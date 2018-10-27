<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Business_Partner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Business_PartnersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $business_partners = Business_Partner::all();

        return view('backEnd.business_partners.index', compact('business_partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.business_partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', ]);

        Business_Partner::create($request->all());

        Session::flash('message', 'Business_Partner added!');
        Session::flash('status', 'success');

        return redirect('business_partners');
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
        $business_partner = Business_Partner::findOrFail($id);

        return view('backEnd.business_partners.show', compact('business_partner'));
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
        $business_partner = Business_Partner::findOrFail($id);

        return view('backEnd.business_partners.edit', compact('business_partner'));
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

        $business_partner = Business_Partner::findOrFail($id);
        $business_partner->update($request->all());

        Session::flash('message', 'Business_Partner updated!');
        Session::flash('status', 'success');

        return redirect('business_partners');
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
        $business_partner = Business_Partner::findOrFail($id);

        $business_partner->delete();

        Session::flash('message', 'Business_Partner deleted!');
        Session::flash('status', 'success');

        return redirect('business_partners');
    }

}
