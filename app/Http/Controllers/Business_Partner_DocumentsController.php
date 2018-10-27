<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Business_Partner_Document;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Business_Partner_DocumentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $business_partner_documents = Business_Partner_Document::all();

        return view('backEnd.business_partner_documents.index', compact('business_partner_documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.business_partner_documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['business_partner_id' => 'required', ]);

        Business_Partner_Document::create($request->all());

        Session::flash('message', 'Business_Partner_Document added!');
        Session::flash('status', 'success');

        return redirect('business_partner_documents');
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
        $business_partner_document = Business_Partner_Document::findOrFail($id);

        return view('backEnd.business_partner_documents.show', compact('business_partner_document'));
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
        $business_partner_document = Business_Partner_Document::findOrFail($id);

        return view('backEnd.business_partner_documents.edit', compact('business_partner_document'));
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
        $this->validate($request, ['business_partner_id' => 'required', ]);

        $business_partner_document = Business_Partner_Document::findOrFail($id);
        $business_partner_document->update($request->all());

        Session::flash('message', 'Business_Partner_Document updated!');
        Session::flash('status', 'success');

        return redirect('business_partner_documents');
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
        $business_partner_document = Business_Partner_Document::findOrFail($id);

        $business_partner_document->delete();

        Session::flash('message', 'Business_Partner_Document deleted!');
        Session::flash('status', 'success');

        return redirect('business_partner_documents');
    }

}
