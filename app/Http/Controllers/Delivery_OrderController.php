<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Delivery_Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Delivery_OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $delivery_order = Delivery_Order::all();

        return view('backEnd.delivery_order.index', compact('delivery_order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.delivery_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['customer_id' => 'required', 'user_id' => 'required', ]);

        Delivery_Order::create($request->all());

        Session::flash('message', 'Delivery_Order added!');
        Session::flash('status', 'success');

        return redirect('delivery_order');
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
        $delivery_order = Delivery_Order::findOrFail($id);

        return view('backEnd.delivery_order.show', compact('delivery_order'));
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
        $delivery_order = Delivery_Order::findOrFail($id);

        return view('backEnd.delivery_order.edit', compact('delivery_order'));
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
        $this->validate($request, ['customer_id' => 'required', 'user_id' => 'required', ]);

        $delivery_order = Delivery_Order::findOrFail($id);
        $delivery_order->update($request->all());

        Session::flash('message', 'Delivery_Order updated!');
        Session::flash('status', 'success');

        return redirect('delivery_order');
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
        $delivery_order = Delivery_Order::findOrFail($id);

        $delivery_order->delete();

        Session::flash('message', 'Delivery_Order deleted!');
        Session::flash('status', 'success');

        return redirect('delivery_order');
    }

}
