<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detail_Delivery_Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Detail_Delivery_OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $detail_delivery_order = Detail_Delivery_Order::all();

        return view('backEnd.detail_delivery_order.index', compact('detail_delivery_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.detail_delivery_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['delivery_order_id' => 'required', 'material_id' => 'required', ]);

        Detail_Delivery_Order::create($request->all());

        Session::flash('message', 'Detail_Delivery_Order added!');
        Session::flash('status', 'success');

        return redirect('detail_delivery_order');
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
        $detail_delivery_order = Detail_Delivery_Order::findOrFail($id);

        return view('backEnd.detail_delivery_order.show', compact('detail_delivery_order'));
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
        $detail_delivery_order = Detail_Delivery_Order::findOrFail($id);

        return view('backEnd.detail_delivery_order.edit', compact('detail_delivery_order'));
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
        $this->validate($request, ['delivery_order_id' => 'required', 'material_id' => 'required', ]);

        $detail_delivery_order = Detail_Delivery_Order::findOrFail($id);
        $detail_delivery_order->update($request->all());

        Session::flash('message', 'Detail_Delivery_Order updated!');
        Session::flash('status', 'success');

        return redirect('detail_delivery_order');
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
        $detail_delivery_order = Detail_Delivery_Order::findOrFail($id);

        $detail_delivery_order->delete();

        Session::flash('message', 'Detail_Delivery_Order deleted!');
        Session::flash('status', 'success');

        return redirect('detail_delivery_order');
    }

}
