<?php

namespace App\Http\Controllers;

use App\Models\Rma;
use App\Models\Warehouse;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\addInventory;
use Illuminate\Http\Request;


class RmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.rma.index',[
            'customers' => Customer::where('users_id',session('user')[0]->id)->get(),
            'rmas' => Rma::where('users_id',session('user')[0]->id)->paginate(10),
            'warehouses' => Warehouse::where('users_id',session('user')[0]->id)->get(),
            'suppliers' => Supplier::where('users_id',session('user')[0]->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'customer' => 'required|string',
            'warehouse' => 'required|string',
            'supplier' => 'required|string',
        ]);
        // storing this request into database
        $task = new Rma();
        $task->users_id = session('user')[0]->id;
        $task->customer_id = $validated['customer'];
        $task->warehouse_id = $validated['warehouse'];
        $task->supplire_id = $validated['supplier'];
        $task->status = "New";
        $task->save();

        return redirect()->back()->with('message', 'RMA was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rma  $rma
     * @return \Illuminate\Http\Response
     */
    public function show(Rma $rma)
    {
        // fetching Add Inventory Data
        $addInventory = addInventory::where(['users_id' => session('user')[0]->id , 'rma_id' => $rma->id])->get();
        return view('dashboard.rma.show',[
            'rma' => $rma,
            'addInventory' => $addInventory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rma  $rma
     * @return \Illuminate\Http\Response
     */
    public function edit(Rma $rma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rma  $rma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rma $rma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rma  $rma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rma $rma)
    {
        //
    }
}
