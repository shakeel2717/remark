<?php

namespace App\Http\Controllers;

use App\Models\Rma;
use App\Models\Warehouse;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\addInventory;
use App\Models\rmaRefunds;
use App\Models\Reason;
use App\Models\rmahistory;
use Illuminate\Http\Request;


class RmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('dashboard.rma.index',[
    //         'customers' => Customer::where('users_id',session('user')[0]->id)->get(),
    //         'rmas' => Rma::where('users_id',session('user')[0]->id)->paginate(10),
    //         'warehouses' => Warehouse::where('users_id',session('user')[0]->id)->get(),
    //         'suppliers' => Supplier::where('users_id',session('user')[0]->id)->get(),
    //     ]);
    // }

    public function rmaCustomer(Request $request)
    {
        session(['rmaCustomer' => "selected='selected'"]);
        $request->session()->forget('rmaSupplier');
        return view('dashboard.rma.index', [
            'customers' => Customer::where('users_id', session('user')[0]->id)->where('type', 0)->get(),
            'rmas' => Rma::where('users_id', session('user')[0]->id)->where('type', 0)->paginate(10),
            'warehouses' => Warehouse::where('users_id', session('user')[0]->id)->get(),
            'suppliers' => Customer::where('users_id', session('user')[0]->id)->where('type', 1)->get(),
        ]);
    }

    public function rmaSupplier(Request $request)
    {
        session(['rmaSupplier' => "selected='selected'"]);
        $request->session()->forget('rmaCustomer');
        return view('dashboard.rma.index', [
            'customers' => Customer::where('users_id', session('user')[0]->id)->where('type', 1)->get(),
            'rmas' => Rma::where('users_id', session('user')[0]->id)->where('type', 1)->paginate(10),
            'warehouses' => Warehouse::where('users_id', session('user')[0]->id)->get(),
            'suppliers' => Customer::where('users_id', session('user')[0]->id)->where('type', 1)->get(),
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
            'customer' => 'required_without:supplier|integer',
            'warehouse' => 'required|string',
            'supplier' => 'required_without:customer|integer',
            'type' => 'required|boolean',
        ]);
        // storing this request into database
        $task = new Rma();
        $task->users_id = session('user')[0]->id;
        if ($validated['type'] == 0) {
            $task->customer_id = $validated['customer'];
        } elseif ($validated['type'] == 1) {
            $task->customer_id = $validated['supplier'];
        }
        $task->warehouse_id = $validated['warehouse'];
        $task->status = "New";
        $task->type = $validated['type'];
        $task->save();
        $rMAID = $task->id;
        $rmadate = $task->created_at;

        // inserting this RMA Creation History
        $task = new rmahistory();
        $task->users_id = session('user')[0]->id;
        $task->customers_id = $validated['customer'];
        $task->rma_id = $rMAID;
        $task->title = "RMA Created Successfully";
        $task->value = "RMA# $rMAID Created by " . session('user')[0]->fname . " " . session('user')[0]->lname . " on " . $rmadate . "";
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
        $addInventory = addInventory::where(['users_id' => session('user')[0]->id, 'rma_id' => $rma->id])->get();
        $rmaRefunds = rmaRefunds::where(['users_id' => session('user')[0]->id, 'rma_id' => $rma->id])->get();
        $reasons = Reason::where('users_id', session('user')[0]->id)->get();
        $rmaHistory = rmahistory::where('users_id', session('user')[0]->id)->where('rma_id', $rma->id)->get();
        return view('dashboard.rma.show', [
            'rma' => $rma,
            'addInventory' => $addInventory,
            'rmaRefunds' => $rmaRefunds,
            'reasons' => $reasons,
            'rmaHistories' => $rmaHistory,
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

    public function rmaStatusChange(Request $request)
    {
        // updating the Status of Current RMA
        $validated = $request->validate([
            'rmaId' => 'required|integer',
            'status' => 'required|alpha',
        ]);
        $task = Rma::find($validated['rmaId']);
        $task->status = $validated['status'];
        $task->save();
        return redirect()->back()->with('message', 'Task Completed Successfully');
    }
}
