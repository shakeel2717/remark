<?php

namespace App\Http\Controllers;

use App\Models\addInventory;
use App\Models\Rma;
use App\Models\rmahistory;
use Illuminate\Http\Request;

class AddInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'rma_id' => 'required|integer',
            'serial' => 'required|string',
            'model' => 'required|string',
            'issue' => 'required|string',
            'sale_price' => 'required|string',
            'reason' => 'nullable|string',
            'creditNote' => 'file|mimes:jpg,jpeg,png',
        ]);
        if ($request->hasFile('creditNote')){
            $file = $validated['creditNote'];
            $filename = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $validated['creditNote']->move('creditNote', $filename);
        } else {
            $filename = Null;
        }

        $getCustomerID = Rma::find($validated['rma_id']);
        // inserting new Customer
        $task = new addInventory();
        $task->users_id = session('user')[0]->id;
        $task->rma_id = $validated['rma_id'];
        $task->customers_id = $getCustomerID->customer_id;
        $task->reason_id = $validated['reason'] ?? null;
        $task->serial = $validated['serial'];
        $task->model = $validated['model'];
        $task->issue = $validated['issue'];
        $task->sale_price = $validated['sale_price'];
        $task->creditNote = $filename;
        $task->save();

        $rMAID = $validated['rma_id'];
        $rmadate = $task->created_at;

        // Getting Customer ID

        // inserting this RMA Creation History
        $task = new rmahistory();
        $task->users_id = session('user')[0]->id;
        $task->customers_id = $getCustomerID->customer_id;
        $task->rma_id = $rMAID;
        $task->title = "Inventory Added into This RMA";
        $task->value = "Inventory Added into RMA# $rMAID Successfully by ".session('user')[0]->fname." ".session('user')[0]->lname." on ".$rmadate."";
        $task->save();
        return redirect()->back()->with('message', 'Inventory Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\addInventory  $addInventory
     * @return \Illuminate\Http\Response
     */
    public function show(addInventory $addInventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addInventory  $addInventory
     * @return \Illuminate\Http\Response
     */
    public function edit(addInventory $addInventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addInventory  $addInventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addInventory $addInventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addInventory  $addInventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(addInventory $addInventory)
    {
        //
    }
}
