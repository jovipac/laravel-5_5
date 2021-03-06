<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ItemsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Item::all();

        return view('backEnd.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['price' => 'required', ]);

        Item::create($request->all());

        Session::flash('message', 'Item added!');
        Session::flash('status', 'success');

        return redirect('admin/items');
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
        $item = Item::findOrFail($id);

        return view('backEnd.items.show', compact('item'));
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
        $item = Item::findOrFail($id);

        return view('backEnd.items.edit', compact('item'));
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
        $this->validate($request, ['price' => 'required', ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        Session::flash('message', 'Item updated!');
        Session::flash('status', 'success');

        return redirect('admin/items');
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
        $item = Item::findOrFail($id);

        $item->delete();

        Session::flash('message', 'Item deleted!');
        Session::flash('status', 'success');

        return redirect('admin/items');
    }

}
