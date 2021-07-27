<?php

namespace App\Http\Controllers;

use App\Models\saleOrders;
use App\Models\Customer;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class SaleOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.saleOrders.index',[
            'saleOrders' => saleOrders::where('users_id',session('user')[0]->id)->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.saleOrders.create',[
            'customers' => Customer::where('users_id',session('user')[0]->id)->get(),
            'warehouses' => Warehouse::where('users_id',session('user')[0]->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'warehouse' => 'required|integer',
            'customer' => 'required|integer',
            'txid' => 'required|string',
        ]);

        // inserting new Customer
        $task = new saleOrders();
        $task->users_id = session('user')[0]->id;
        $task->customer_id = $validated['customer'];
        $task->warehouse_id = $validated['warehouse'];
        $task->txid = $validated['txid'];
        $task->save();
        return redirect()->back()->with('message', 'Sale Order Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\saleOrders  $saleOrders
     * @return \Illuminate\Http\Response
     */
    public function show(saleOrders $saleOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\saleOrders  $saleOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(saleOrders $saleOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\saleOrders  $saleOrders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, saleOrders $saleOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\saleOrders  $saleOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(saleOrders $saleOrders)
    {
        //
    }
}
